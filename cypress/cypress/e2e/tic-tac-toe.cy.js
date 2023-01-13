/// <reference types="Cypress" />

describe('tic tac toe game', () => {
  beforeEach(() => {
    cy.visit('http://localhost')
  })

  it('selects a square if its empty and shows the correct sign (X or O)', () => {
    cy.get('#r1-c1').click()
    cy.get('#r1-c1').should('contain.text', 'X')
    cy.get('#r1-c2').click()
    cy.get('#r1-c2').should('contain.text', 'O')
    cy.get('#r1-c3').click()
    cy.get('#r1-c3').should('contain.text', 'X')
  })
  it('shows an error message when clicking an already selected square')
  it('detects if somebody has won')
  it('restarts the game if the restart button is clicked')
})