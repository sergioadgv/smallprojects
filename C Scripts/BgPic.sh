#!/usr/bin/bash 

echo "What background would you like? (C=Classic) (H=HighTech)"

read opt

	case $opt in
		"H") echo "You choose HighTech"

			osascript -e 'tell application "Finder" to set desktop picture to POSIX file "/Users/sergiodigiacinto/Desktop/Resources/backgroundpic.jpg"'

		;;
		
		"C") echo "You choose Classic Mode." 
			
			osascript -e 'tell application "Finder" to set desktop picture to POSIX file "/Users/sergiodigiacinto/Desktop/Resources/christmasbackground.jpg"'

	esac

echo "Enjoy your new background!"