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
  })
  
  it('shows an error message when clicking an already selected square', () => {
    cy.get('#r1-c1').click()
    cy.get('#r1-c1').click()
    cy.document().should('contain.text', 'You need to select an empty square')
  })

  it('detects if a player has won', () => {
    cy.get('#r1-c1').click()
    cy.get('#r2-c1').click()
    cy.get('#r1-c2').click()
    cy.get('#r2-c2').click()
    cy.get('#r1-c3').click()
    cy.get('h1').should('contain.text', 'Player X has won')
  })

  it('restarts the game if the restart button is clicked', () => {
    cy.get('#r1-c1').click()
    cy.get('#r2-c1').click()
    cy.get('#r1-c2').click()
    cy.get('#r2-c2').click()
    cy.get('#r1-c3').click()
    cy.get('h1').should('contain.text', 'Player X has won')
    cy.get('#restart').click()
    cy.get('h1').should('not.contain.text', 'Player X has won')
    cy.get('#r1-c1').should('not.contain.text', 'X')
  })
})