# Testing interfaces

## Getting started
1. Checkout a new branch `testing/interface-testing` (or similar).
2. Make a new file `interface-tests.cy.js` in your `e2e` folder in cypress. Please write your tests in this file.

## Exercises

Write tests for the following checks:

1. If not signed in:
   * On the index page the backend returns a list of **active** products only (The backend should **not** return products where `active === '0'`).
2. If signed in:
   * On the Home route, the backend returns only **active** products.
   * On the `Products` route, the backend returns **all** (active and inactive) products.

You will need at least 3 test cases. Do you have any ideas what else should be tested?

## Hints
The following tips and resources will be helpful:
- I would recommend creating a new public endpoint in your API (not just `/API/V1/Products`).
   - If you dont want to do that and you feel adventurous you can also try to implement a filter as a query parameter. So an example you could request products like this: `http://localhost/API/V1/Products?filter[active]=1`
- Cypress documentation for making requests: https://docs.cypress.io/api/commands/request
- Cypress documentation on what `cy.request()` yields: https://docs.cypress.io/api/commands/request#Yields
  - Yields means you need to call it like this:
    ```javascript
    cy.request('http://MY_CRAZY_URL').then((response) => {
      console.log(response.status) # would print '200' into the console
    })