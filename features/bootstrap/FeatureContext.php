<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit_Framework_Assert as PHPUnit;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Then I can do something with Laravel
     */
    public function iCanDoSomethingWithLaravel()
    {
        PHPUnit::assertEquals('.env.behat', app()->environmentFile());
        PHPUnit::assertEquals('acceptance', env('APP_ENV'));
        PHPUnit::assertTrue(config('app.debug'));
    }

    /**
     * @Given I am on the :page page
     */
    public function iAmOnThePage($page)
    {
        $this->visitPath($page);
    }

    /**
     * @Then /^(?:there should be )?an? "(?P<element>[^"]*)" with(?: attributes)? "(?P<atts>[^"]*)" having values "(?P<vals>[^"]*)"$/
     */
    public function thereShouldBeAnElementWithAttributesHavingValues($element, $atts, $vals)
    {
        $selector = $element;
        $atts = explode(',', $atts);
        $vals = explode(',', $vals);
        for ($i = 0; $i < count($atts); ++$i) {
            $selector .= '['.$atts[$i].'="'.$vals[$i].'"]';
        }
        $this->assertSession()->elementExists('css', $selector);
    }

    /**
     * @Then every visible input should have a label
     */
    public function everyVisibleInputShouldHaveALabel()
    {
        $xpath = '(//select|//input|//textarea)[not(@id="g-recaptcha-response" or @type="hidden" or @type="submit" or @type="radio" or contains(@style,"display:none"))]';
        $fields = $this->getSession()->getPage()->findAll('xpath', $xpath);
        foreach ($fields as $f) {
            $this->assertSession()->elementExists('css', 'label[for="'.$f->getAttribute('id').'"]');
        }
    }


}
