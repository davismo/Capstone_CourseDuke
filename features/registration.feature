Feature: Registration and Activation
	In order to become a member of the site
	As a non-member
	I need the ability to register and activate a new account

	Scenario: Elements on the Registration Form
        Given I am on the "auth/register" page
        Then there should be a "form" with "action,method" having values "/auth/register,POST"
        And an "input" with "type,name" having values "hidden,_token"
        And an "input" with "type,name,id" having values "text,firstname,firstname"
        And an "input" with "type,name,id" having values "text,lastname,lastname"
        And an "input" with "type,name,id" having values "text,concentration,concentration"
        And an "input" with "type,name,id" having values "text,grad,grad"
        And an "input" with "type,name,id" having values "email,email,email"
        And an "input" with "type,name,id" having values "password,password,password"
        And an "input" with "type,name,id" having values "password,password_confirmation,password_confirmation"
        And a "button" with "type,id" having values "submit,submit"
        And every visible input should have a label

	Scenario: All fields are required
		Given I am on the "auth/register" page
		When I fill in "name" with ""
		And I fill in "email" with ""
		And I fill in "password" with ""
		And I fill in "password_confirmation" with ""
		And I press "Register"
		Then I should see "The name field is required"
		And I should see "The name field is required"
		And I should see "The name field is required"
		And I should see "The name field is required"
