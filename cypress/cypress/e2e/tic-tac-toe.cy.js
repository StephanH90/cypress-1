/// <reference types="Cypress" />

describe('tic tac toe game', () => {
  beforeEach(() => {
    cy.visit('http://localhost')
  })

  it('selects a square if its empty and shows the correct sign (X or O)')
  it('shows an error message when clicking an already selected square')
  it('detects if somebody has won')
  it('restarts the game if the restart button is clicked')
})