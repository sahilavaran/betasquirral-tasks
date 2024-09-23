<?php
// variables in php
$name = 'sahil';

echo $name;
// $ use cheyydhittu ann variables start cheyyandiyadh 


//lets check data types 
//$firstName = "sahil";
$sum = -12;  //this is integer
$total =56.5; //float ann idh 
$isPassed = false; // boolean

$latitude = NULL; //IDH ANN NULL

//array (list of items )
$languages =array("php", "python",)  //idh array ann with functions
$language =["php", "python","php", "python"] // idhum array ann 

//LETS CHECK THE FUNCTION
function greet(){
    echo "hello sahil"
}

greet();

//idhilu nammal parameter set cheyyan ann
function greets($name){
    echo "hello sahil"
}

greets('sahil');  //evde aa parameternu vendi argument set cheyydgu 
// ee function vera oru aalod name use cheyydhittum call cheyyan pattum


//eni nammuk return cheyyunadh angane nokkam 
function findSum($num1, $num2) {
    return $num1 + $num2;
}

$sum = findSum(2,5);  // return use cheyyuna function call/or invoke cheyyam variablil store cheyyanam aadhyam 

//lets check if condition 

$studentName ="jo";
$score = 85;

//functionu global scope access cheyyan kayula like mugalil ulla variables so aa variables parametersilu add cheyydhu kodutha madhi
function printGrade ($score, $studentName)
if($score >= 90){
    echo $studentName . 'has scored a grade!';  //evde $studentName kazhjittu ulla a . , plusinu pakaram ann javascriptithe 
}else if($score >= 80){
    echo $studentName . 'has scored b grade!';
}else {
    echo $studentName . 'has failed the exam';
}


//for loops 
$number =5;

echo "multiplication table for $number"

for($i = 1; $i <= 10; $i++) {
    $result = $number * $i;

}

//switch statements

//ooro value ehumpo ooro condition
function calculateShippingCharge($countryCode) {
    $cost = 0;
    switch ($countryCode) {
        case 'USA':
            $cost =10;
            break;
        case 'UAE':
            $cost = 5;
            break;
        case 'PAK':
            $cost = 4;
            break;

        default:
            $cost = 0;
            break;
    }
    return $cost;
}

echo calculateShippingCharge('UAE');

//LETS CHECK  BREAK AND THE CONTINUE

$limit =10;

echo "even numbers up to $limit <br/>"
for ($i=1; $i <= $limit ; $i++) { 
    if ($i % 2 !== 0) {
        continue;
    }
    echo $i . "<br/>";

    if ($i >= 20) {
        break;
    }
}

//object oriented programming
// ithilu njammal oru class or group ann udheshikunadh that means fruits koduthittu list of fruits adhu polea

// ooro classinum methods propertiesum indavum
// example for this 

//define the class
<?php
class BasketballPlayer {
    // Properties
    public $name;
    public $team;
    public $position;
    public $pointsScored;

    // Constructor to initialize properties
    public function __construct($name, $team, $position, $pointsScored) {
        $this->name = $name;
        $this->team = $team;
        $this->position = $position;
        $this->pointsScored = $pointsScored;
    }

    // Method to display player info
    public function displayPlayerInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Team: " . $this->team . "\n";
        echo "Position: " . $this->position . "\n";
        echo "Points Scored: " . $this->pointsScored . "\n";
    }

    // Method to add points
    public function addPoints($points) {
        $this->pointsScored += $points;
        echo $this->name . " scored " . $points . " points. Total: " . $this->pointsScored . "\n";
    }
}

//Step 2: Create Objects from the Class

<?php
class Game {
    // Properties
    public $team1;
    public $team2;
    public $scoreTeam1 = 0;
    public $scoreTeam2 = 0;

    // Constructor to initialize the teams
    public function __construct($team1, $team2) {
        $this->team1 = $team1;
        $this->team2 = $team2;
    }

    // Method to start the game
    public function startGame() {
        echo "Game started between " . $this->team1->teamName . " and " . $this->team2->teamName . "!\n";
    }

    // Method to add score to a team
    public function addScore($teamName, $points) {
        if ($this->team1->teamName == $teamName) {
            $this->scoreTeam1 += $points;
        } else if ($this->team2->teamName == $teamName) {
            $this->scoreTeam2 += $points;
        }
        echo $teamName . " scored " . $points . " points.\n";
    }

    // Method to display the game result
    public function displayResult() {
        echo "Final Score:\n";
        echo $this->team1->teamName . ": " . $this->scoreTeam1 . "\n";
        echo $this->team2->teamName . ": " . $this->scoreTeam2 . "\n";

        if ($this->scoreTeam1 > $this->scoreTeam2) {
            echo $this->team1->teamName . " wins!\n";
        } else if ($this->scoreTeam1 < $this->scoreTeam2) {
            echo $this->team2->teamName . " wins!\n";
        } else {
            echo "It's a tie!\n";
        }
    }
}
?>
//Step 3: Using the Classes

<?php
// Include the class files (if they're in separate files)
// include 'BasketballPlayer.php';
// include 'Team.php';
// include 'Game.php';

// Create player objects
$player1 = new BasketballPlayer("LeBron James", "Lakers", "Forward", 0);
$player2 = new BasketballPlayer("Anthony Davis", "Lakers", "Center", 0);
$player3 = new BasketballPlayer("Stephen Curry", "Warriors", "Guard", 0);
$player4 = new BasketballPlayer("Klay Thompson", "Warriors", "Guard", 0);

// Create team objects
$teamLakers = new Team("Lakers");
$teamWarriors = new Team("Warriors");

// Add players to teams
$teamLakers->addPlayer($player1);
$teamLakers->addPlayer($player2);
$teamWarriors->addPlayer($player3);
$teamWarriors->addPlayer($player4);

// Display team info
$teamLakers->displayTeamInfo();
$teamWarriors->displayTeamInfo();

// Create a game
$game = new Game($teamLakers, $teamWarriors);

// Start the game
$game->startGame();

// Add scores
$game->addScore("Lakers", 30);
$game->addScore("Warriors", 25);
$game->addScore("Lakers", 20);
$game->addScore("Warriors", 30);

// Display the game result
$game->displayResult();
?>

//is this something like we use it for the module ?
//Yes, using classes and objects in PHP is a way to modularize your code. Object-oriented programming (OOP) allows you to create reusable, organized, and maintainable code by encapsulating related properties and methods into classes.


//Modularization with OOP
//Encapsulation: Bundling related properties and methods into a single class. For example, the BasketballPlayer class encapsulates all the properties and behaviors related to a basketball player.

//Reusability: Once a class is defined, you can create multiple instances (objects) of that class without rewriting the code. For example, you can create multiple BasketballPlayer objects from the BasketballPlayer class.

//Modularity: By separating different functionalities into different classes, your code becomes modular. Each class can be developed, tested, and maintained independently. For example, the Team and Game classes are separate modules that interact with each other.

//using Classes as Modules
//Let's expand on the previous example to show how you can use these classes as modules in a larger application.

//Example: Modularizing a Basketball League
//Player Module: Handles all functionalities related to players.
//Team Module: Manages team-related functionalities.
//Game Module: Manages game-related functionalities.
//League Module: Manages the overall league, integrating players, teams, and games.

//Player Module (BasketballPlayer.php)

<?php
class BasketballPlayer {
    public $name;
    public $team;
    public $position;
    public $pointsScored;

    public function __construct($name, $team, $position, $pointsScored) {
        $this->name = $name;
        $this->team = $team;
        $this->position = $position;
        $this->pointsScored = $pointsScored;
    }

    public function displayPlayerInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Team: " . $this->team . "\n";
        echo "Position: " . $this->position . "\n";
        echo "Points Scored: " . $this->pointsScored . "\n";
    }

    public function addPoints($points) {
        $this->pointsScored += $points;
        echo $this->name . " scored " . $points . " points. Total: " . $this->pointsScored . "\n";
    }
}
?>

Team Module (Team.php)
<?php
include 'BasketballPlayer.php';

class Team {
    public $teamName;
    public $players = array();

    public function __construct($teamName) {
        $this->teamName = $teamName;
    }

    public function addPlayer($player) {
        $this->players[] = $player;
    }

    public function displayTeamInfo() {
        echo "Team: " . $this->teamName . "\n";
        echo "Players:\n";
        foreach ($this->players as $player) {
            $player->displayPlayerInfo();
        }
    }
}
?>
//Game Module (Game.php)
<?php
include 'Team.php';

class Game {
    public $team1;
    public $team2;
    public $scoreTeam1 = 0;
    public $scoreTeam2 = 0;

    public function __construct($team1, $team2) {
        $this->team1 = $team1;
        $this->team2 = $team2;
    }

    public function startGame() {
        echo "Game started between " . $this->team1->teamName . " and " . $this->team2->teamName . "!\n";
    }

    public function addScore($teamName, $points) {
        if ($this->team1->teamName == $teamName) {
            $this->scoreTeam1 += $points;
        } else if ($this->team2->teamName == $teamName) {
            $this->scoreTeam2 += $points;
        }
        echo $teamName . " scored " . $points . " points.\n";
    }

    public function displayResult() {
        echo "Final Score:\n";
        echo $this->team1->teamName . ": " . $this->scoreTeam1 . "\n";
        echo $this->team2->teamName . ": " . $this->scoreTeam2 . "\n";

        if ($this->scoreTeam1 > $this->scoreTeam2) {
            echo $this->team1->teamName . " wins!\n";
        } else if ($this->scoreTeam1 < $this->scoreTeam2) {
            echo $this->team2->teamName . " wins!\n";
        } else {
            echo "It's a tie!\n";
        }
    }
}
?>
//League Module (League.php)
<?php
include 'Game.php';

class League {
    public $teams = array();
    public $games = array();

    public function addTeam($team) {
        $this->teams[] = $team;
    }

    public function scheduleGame($team1, $team2) {
        $game = new Game($team1, $team2);
        $this->games[] = $game;
        return $game;
    }

    public function displayTeams() {
        foreach ($this->teams as $team) {
            $team->displayTeamInfo();
        }
    }

    public function displayGames() {
        foreach ($this->games as $game) {
            $game->displayResult();
        }
    }
}
?>
//Using the League Module
<?php
// Include the League module
include 'League.php';

// Create player objects
$player1 = new BasketballPlayer("LeBron James", "Lakers", "Forward", 0);
$player2 = new BasketballPlayer("Anthony Davis", "Lakers", "Center", 0);
$player3 = new BasketballPlayer("Stephen Curry", "Warriors", "Guard", 0);
$player4 = new BasketballPlayer("Klay Thompson", "Warriors", "Guard", 0);

// Create team objects
$teamLakers = new Team("Lakers");
$teamWarriors = new Team("Warriors");

// Add players to teams
$teamLakers->addPlayer($player1);
$teamLakers->addPlayer($player2);
$teamWarriors->addPlayer($player3);
$teamWarriors->addPlayer($player4);

// Create a league
$league = new League();
$league->addTeam($teamLakers);
$league->addTeam($teamWarriors);

// Display teams
$league->displayTeams();

// Schedule and play a game
$game = $league->scheduleGame($teamLakers, $teamWarriors);
$game->startGame();
$game->addScore("Lakers", 30);
$game->addScore("Warriors", 25);
$game->addScore("Lakers", 20);
$game->addScore("Warriors", 30);

// Display game results
$league->displayGames();
?>

/*Explanation
Player Module:

The BasketballPlayer class encapsulates player-related data and methods.
Team Module:

The Team class encapsulates team-related data and methods, and uses the BasketballPlayer class.
Game Module:

The Game class manages game-related data and methods, using the Team class.
League Module:

The League class manages the overall league, integrating teams and games, and providing methods to add teams, schedule games, and display results.
By modularizing the code into separate classes, we achieve better organization, reusability, and maintainability. Each module (class) focuses on a specific aspect of the application, making it easier to develop, test, and maintain.*/
