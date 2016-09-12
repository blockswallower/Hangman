<?php

class graphics {
    public function __construct() {}

    public static function drawGallow() {
        $tries = $_SESSION['tries'];

        /*
         * 10 tries left
         */
        if ($tries >= 10) {
            echo "";

            /*
             * 9 tries left
             */
        } else if ($tries >= 9) {
            /*
             * Drawing:
             *
             * # # # # # # #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
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
             * 7 tries left
             */
        } else if ($tries == 7) {
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
             * 6 tries left
             */
        } else if ($tries == 6) {
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
             * 5 tries left
             */
        } else if ($tries == 5) {
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
             * 4 tries left
             */
        } else if ($tries == 4) {
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

            /*
             * 3 tries left
             */
        } else if ($tries == 3) {
            /*
             * Drawing:
             *
             * # # # # # # #
             * #           |
             * #           |
             * #           O
             * #           |
             * #          /
             * # # # #
             */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 4; $ii++) {
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

                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp/
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
             * 2 tries left
             */
        } else if ($tries == 2) {
            /*
            * Drawing:
            *
            * # # # # # # #
            * #           |
            * #           |
            * #           O
            * #           |
            * #          /\
            * # # # #
            */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 4; $ii++) {
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

                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp/\
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
             * 1 tries left
             */
        } else if ($tries == 1) {
            /*
            * Drawing:
            *
            * # # # # # # #
            * #           |
            * #           |
            * #          \O
            * #           |
            * #          /\
            * # # # #
            */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 4; $ii++) {
                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp\O
                           <br>";
                }

                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp|
                           <br>";
                }

                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp/\
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
             * 0 tries left
             */
        } else if ($tries == 0) {
            /*
            * Drawing:
            *
            * # # # # # # #
            * #           |
            * #           |
            * #          \O/
            * #           |
            * #          /\
            * # # # #
            */
            for ($ii = 0; $ii <= 7; $ii++) {
                echo "# ";
            }

            echo "<br>";

            for ($ii = 0; $ii <= 4; $ii++) {
                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp\O/
                           <br>";
                }

                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp|
                           <br>";
                }

                if ($ii == 2) {
                    echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp/\
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
        }
    }

    public static function drawFullGallow() {
        for ($ii = 0; $ii <= 7; $ii++) {
            echo "# ";
        }

        echo "<br>";

        for ($ii = 0; $ii <= 4; $ii++) {
            if ($ii == 2) {
                echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp\O/
                           <br>";
            }

            if ($ii == 2) {
                echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp|
                           <br>";
            }

            if ($ii == 2) {
                echo "# &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp&nbsp&nbsp
                           &nbsp&nbsp/\
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
    }
}