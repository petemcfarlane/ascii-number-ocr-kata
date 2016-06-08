const test = require('tape')
const translate = require('./asciiNumberOcr')

test('it converts an ascii representation of a number into a number', assert => {

  let asciiNumberZero = `
 _ 
| |
|_|
   `

  let asciiNumberOne = `
   
  |
  |
   `

  let asciiNumberTwo = `
 _ 
 _|
|_ 
   `

let asciiNumberThree = `
 _ 
 _|
 _|
   `

let asciiNumberFour = `
   
|_|
  |
   `

  let asciiNumberFive = `
 _ 
|_ 
 _|
   `

  let asciiNumberSix = `
 _ 
|_ 
|_|
   `

  let asciiNumberSeven = `
 _ 
  |
  |
   `

  let asciiNumberEight = `
 _ 
|_|
|_|
   `

  let asciiNumberNine = `
 _ 
|_|
 _|
   `


  assert.equals(translate(asciiNumberZero), '0')
  assert.equals(translate(asciiNumberOne), '1')
  assert.equals(translate(asciiNumberTwo), '2')
  assert.equals(translate(asciiNumberThree), '3')
  assert.equals(translate(asciiNumberFour), '4')
  assert.equals(translate(asciiNumberFive), '5')
  assert.equals(translate(asciiNumberSix), '6')
  assert.equals(translate(asciiNumberSeven), '7')
  assert.equals(translate(asciiNumberEight), '8')
  assert.equals(translate(asciiNumberNine), '9')

  assert.end()
})

test('it converts an ascii sequence into a number', assert => {

  let asciiNumber0123 = `
 _     _  _ 
| |  | _| _|
|_|  ||_  _|
            `

  let asciiNumber8465 = `
 _     _  _ 
|_||_||_ |_ 
|_|  ||_| _|
            `
  assert.equals(translate(asciiNumber0123), '0123')
  assert.equals(translate(asciiNumber8465), '8465')

  assert.end()
})