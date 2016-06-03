module AsciiNumberOcr (translate) where

import Data.List(transpose)
import Data.List.Split(chunksOf)

translate :: String -> String
translate " _ | ||_|" = "0"
translate "     |  |" = "1"
translate " _  _||_ " = "2"
translate " _  _| _|" = "3"
translate "   |_|  |" = "4"
translate " _ |_  _|" = "5"
translate " _ |_ |_|" = "6"
translate " _   |  |" = "7"
translate " _ |_||_|" = "8"
translate " _ |_| _|" = "9"
translate s = concatMap (translate . concat) $ transpose $ map (chunksOf 3) $ lines s