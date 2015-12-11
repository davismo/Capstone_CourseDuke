Feature: Login and Password Reset
	In order to use the member features of the site
	As a member
	I need the ability to login and remember password 

	Scenario: Elements on the Login Form
		Given I am on the "auth/login" page
		Then there should be a "form" with "action,method" having values "/auth/login,POST"
		And an "input" with "type,name" having values "hidden,_token"
        And an "input" with "type,name,id" having values "email,email,email"
        And an "input" with "type,name,id" having values "password,password,password"
        And an "input" with "type,name,id" having values "checkbox,remember,checkbox"
        And a "button" with "type,id" having values "submit,submit"
        And every visible input should have a label