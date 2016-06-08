import Test.Hspec
import AsciiNumberOcr(translate)

main :: IO ()
main = hspec $ do
    describe "Ascii character to number translator" $ do
        it "should translate a character to a number" $ do
            translate ( " _ \n" ++
                        "| |\n" ++
                        "|_|\n" ++
                        "   ") `shouldBe` "0"

            translate ( "   \n" ++
                        "  |\n" ++
                        "  |\n" ++
                        "   " ) `shouldBe` "1"

            translate ( " _ \n" ++
                        " _|\n" ++
                        "|_ \n" ++
                        "   " ) `shouldBe` "2"

            translate ( " _ \n" ++
                        " _|\n" ++
                        " _|\n" ++
                        "   " ) `shouldBe` "3"

            translate ( "   \n" ++
                        "|_|\n" ++
                        "  |\n" ++
                        "   " ) `shouldBe` "4"

            translate ( " _ \n" ++
                        "|_ \n" ++
                        " _|\n" ++
                        "   " ) `shouldBe` "5"

            translate ( " _ \n" ++
                        "|_ \n" ++
                        "|_|\n" ++
                        "   " ) `shouldBe` "6"

            translate ( " _ \n" ++
                        "  |\n" ++
                        "  |\n" ++
                        "   " ) `shouldBe` "7"

            translate ( " _ \n" ++
                        "|_|\n" ++
                        "|_|\n" ++
                        "   " ) `shouldBe` "8"

            translate ( " _ \n" ++
                        "|_|\n" ++
                        " _|\n" ++
                        "   " ) `shouldBe` "9"

        it "should translate a sequence of characters to a number" $ do
            translate ( " _     _  _ \n" ++
                        "| |  | _| _|\n" ++
                        "|_|  ||_  _|\n" ++
                        "            " ) `shouldBe` "0123"

            translate ( " _  _  _  _ \n" ++
                        "|_||_|  ||_ \n" ++
                        " _||_|  | _|\n" ++
                        "            " ) `shouldBe` "9875"

