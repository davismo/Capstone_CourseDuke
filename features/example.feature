Feature: Testing
	In order to teach Behat
	As a teacher
	I want to demonstrate how to install and create feature


	Scenario: Dashboard is locked to guests
		When I go to "home"
		Then the url should match "auth/login"	