Feature: Registration and Activation
	In order to become a member of the site
	As a non-member
	I need the ability to register and activate a new account

	Scenario: All fields are required
		Given I am on the "register" page
		When I fill in "name" with ""
		And I fill in "email" with ""
		And I fill in "password" with ""
		And I fill in "password_confirmation" with ""
		Then I should see "The name field is required"
		And I should see "The name field is required"
		And I should see "The name field is required"
		And I should see "The name field is required"
