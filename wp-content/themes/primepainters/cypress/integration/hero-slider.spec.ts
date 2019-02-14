
// https://dzone.com/articles/running-cypress-tests-in-an-angular-project-with-t
// import * as animateServiceBoard from '../../public/js/global';
// import { add } from '../support/testadd';

describe('TypeScript', () => {
    context('Navigation', () => {
        beforeEach(() => {
            // console.log('bfe animateServiceBoard: ', animateServiceBoard);
            cy.visit('http://localhost:5000');
        })
    
        it('Find about us', () => {
            // https://on.cypress.io/go
            // timeout: 50000, // increase total time for the visit to resolve
            //   cy.location('pathname').should('include', 'navigation')
            //   cy.go('back')
            //   cy.location('pathname').should('not.include', 'navigation')
            // debugger;
            console.log('animateServiceBoard: ', animateServiceBoard);
            cy.get('.nav li').contains('about us').click();
            cy.location('hash').should('include', 'learn');
        })
    
        // it('cy.reload() - reload the page', () => {
        //   // https://on.cypress.io/reload
        //   // cy.reload()
    
        //   // reload the page without using the cache
        //   // cy.reload(true)
        // })
    });
});