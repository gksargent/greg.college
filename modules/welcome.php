<?php
  $today = date('l');
  $sunday = array("Whomever wrote Easy Like Sunday Morning obviously never had to get a child ready for church.","Sunday clears away the rust of the whole week.","Sunday is the day where we rest from studying, and watch football after church...and take naps. And seriously consider dropping out of college.");
  $monday = array("It's Monday, don't forget to be awesome.","Monday is like a math problem. Add the irritation, subtract the sleep, multiply the problems, divide the happiness.","It's Monday, shake it up!","Always believe something good is about to happen; especially on Mondays.","New Monday...new week...new goals.","Monday is the perfect day to correct last weeks mistakes.","Ok Monday, let's do this.","Monday is another day to kill it.");
  $tuesday = array("Congrats, you survived Monday!","Happy Tuesday! Sounds better than happy Monday right?","How many taco's are you going to eat on this fine Taco Tuesday?","My favorite taco Tuesday spot is the taco stand at Exxon.","Hey, Tuesday is not Monday's ugly sister!","Ahhhhh Tuesday. The day to remember all the things I didn't get done on Monday- and push them off until Wednesday.","Nothing messes up your Friday like realizing it's only Tuesday.","Tuesday is the day I actually start the week, Monday I just deal ith the depression of the weekend ending.");
  $wednesday = array("Half way there. Hello Wednesday.","Why is Wednesday spelled like that?", "Happiness is being halfway through the school week. #Wednesday");
  $thursday = array("I wish you a tolerable Thursday. That's all any of us can hope for.","Thursday is my favorite day to plan how I'm going to get out of the plans I already made for the weekend.","Happy Thursday! You're only one day away from being two days away from doing the same work you're doing right now!","Beter days are just around the corner. They are called Friday, Saturday and Sunday!");
  $friday = array("Fridays are the hardest in some ways: you're so close to freedom.","For most Americans, Friday afternoons are filled with positive anticipation of the weekend. In Washington, it's where government officials dump stories they want to bury.","It's Friday...any plan of being a productive member of society is officially thrown out the window.","I always give 100% to schoolwork: 13% Monday, 22% Tuesday, 26% Wednesday, 35% Thursday, 4% Frida.");
  $saturday = array("The Holy Ghost goes to bed at midnight. So does the BYU-I assignment dropbox.","70% of my homework is due on Saturday, but it takes 300% more time than what's available on Saturday.","It's Saturday. That means I'm slaving away in the office doing homework.");

  //create variables for each day of the week with multiple messages within a single Array
  //use the random function to sort the arrays randomly and pull in the 0 value to display within the echo in the switch statement

  switch ($today) {
    case 'Sunday':
      shuffle($sunday);
      echo "$sunday";
      break;
    case 'Monday':
      shuffle($monday);
      echo "$monday[0]";
      break;
    case 'Tuesday':
      shuffle($tuesday);
      echo "$tuesday[0]";
      break;
    case 'Wednesday':
      shuffle($wednesday);
      echo "$wednesday[0]";
      break;
    case 'Thursday':
      shuffle($thursday);
      echo "$thursday[0]";
      break;
    case 'Friday':
      shuffle($friday);
      echo "$friday[0]";
      break;
    case 'Saturday':
      shuffle($saturday);
      echo "$saturday[0]";
      break;
    default:
      echo 'Howdy yall. Here is a big welcome from Texas.';
      break;
  }

?>
