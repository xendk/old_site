Feature:

  Scenario:
    Given I am on "/"
    Then I should see "The point of Bandaid"

  # Reset theme. A hack, but it'll do for the moment.
  Scenario:
    Given I am logged in as "xen" with password "secret"
    And I am on "/en/admin/appearance/settings/pixture_reloaded"
    And I press "Save configuration"
    Then I should see "The configuration options have been saved"
    
