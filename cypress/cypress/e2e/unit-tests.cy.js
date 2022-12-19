/// <reference types="Cypress" />

describe("fizzbuzz function", () => {
  // If you get the error that 'window.fizzbuzz' is
  // undefined replace `before` with `beforeEach`
  beforeEach(() => {
    cy.visit('localhost')
  })

  it('returns fizz if the number is divisible by 3', () => {
    cy.window().then((window) => {
      const result = window.fizzbuzz(3)

      assert.equal(result, 'fizz')
    })
  })

  it('returns buzz if the number is divisible by 5', () => {
    cy.window().then((window) => {
      const result = window.fizzbuzz(5)

      assert.equal(result, 'buzz')
    })
  })

  it('returns fizzbuzz if the number is divisible by 3 and 5', () => {
    cy.window().then((window) => {
      const result = window.fizzbuzz(15)

      assert.equal(result, 'fizzbuzz')
    })
  })

  it('returns an error message if the number is not divisible by 3 or 5', () => {
    cy.window().then((window) => {
      const result = window.fizzbuzz(7)

      assert.equal(result, 'Number must be divisible by 3 or 5')
    })
  })
})

describe("add function", () => {
  beforeEach(() => {
    cy.visit('localhost')
  })
  
  it("should add the two supplied numbers", () => {
    cy.window().then((window) => {
      const result = window.add("2,3")

      assert.equal(result, 5)
    })
  }) 
})
