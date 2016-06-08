const numbersMap = [
  ' _ | ||_|   ',
  '     |  |   ',
  ' _  _||_    ',
  ' _  _| _|   ',
  '   |_|  |   ',
  ' _ |_  _|   ',
  ' _ |_ |_|   ',
  ' _   |  |   ',
  ' _ |_||_|   ',
  ' _ |_| _|   '
]

module.exports = (asciiNumber) => {
  const lines = asciiNumber.split('\n')

  const chars = lines.map(line => {
    return line.match(/.{3}/g)
  }).filter(line => line != null)

  const transposed = transpose(chars)

  const charArray = transposed.map(chars => numbersMap.indexOf(chars.join('')))

  return charArray.join('')
}

function transpose(rows) {
  const temp = [];

  for (let r = 0; r < rows.length; ++r) {
    for (let c = 0; c < rows[r].length; ++c) {
      if (!temp[c]) {
        temp[c] = [];
      }

      temp[c][r] = rows[r][c];
    }
  }

  return temp;
}