<?php

class graphics {
    public function __construct() {}

    public static function drawGallow() {
        $tries = $_SESSION['tries'];

        /*
         * 12 tries left
         */
        if ($tries >= 12) {
            echo "";

            /*
             * 11 tries left
             */
        } else if ($tries >= 11) {
            /*
             * Drawing:
             *
             * # # # # # # #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            /*
             * 10 tries left
             */
        } else if ($tries == 10) {
            /*
             * Drawing:
             *
             * # # # # # # #
             * #
             * #
             * #
             * #
             * #
             * #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# <br>";
            }

            /*
             * 9 tries left
             */
        } else if ($tries == 9) {
            /*
             * Drawing:
             *
             * # # # # # # #
             * #
             * #
             * #
             * #
             * #
             * #
             * # # # #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# <br>";
            }

            for ($ii = 0; $ii <= 3; $ii++) {
                echo "# ";
            }

            /*
             * 8 tries left
             */
        } else if ($tries == 8) {
            /*
             * Drawing:
             *
             * # # # # # # #
             * #           |
             * #           |
             * #
             * #
             * #
             * #
             * # # # #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 7; $ii++) {
                if ($ii == 0 || $ii == 1) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp|
                           <br>";
                } else {
                    echo "# <br>";
                }
            }

            for ($ii = 0; $ii <= 3; $ii++) {
                echo "# ";
            }

            /*
             * 7 tries left
             */
        } else if ($tries == 7) {
            /*
             * Drawing:
             *
             * # # # # # # #
             * #           |
             * #           |
             * #           O
             * #
             * #
             * # # # #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 6; $ii++) {
                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbspO
                           <br>";
                }

                if ($ii == 0 || $ii == 1) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp|
                           <br>";
                } else {
                    echo "# <br>";
                }
            }

            for ($ii = 0; $ii <= 3; $ii++) {
                echo "# ";
            }

            /*
             * 6 tries left
             */
        } else if ($tries == 6) {
            /*
             * Drawing:
             *
             * # # # # # # #
             * #           |
             * #           |
             * #           O
             * #           |
             * #
             * # # # #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 5; $ii++) {
                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbspO
                           <br>";
                }

                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp|
                           <br>";
                }

                if ($ii == 0 || $ii == 1) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp|
                           <br>";
                } else {
                    echo "# <br>";
                }
            }

            for ($ii = 0; $ii <= 3; $ii++) {
                echo "# ";
            }
        } else if ($tries == 5) {

        }
    }
}