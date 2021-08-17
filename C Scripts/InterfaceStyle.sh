#!/usr/bin/bash 

y=$(eval "defaults read NSGlobalDomain AppleInterfaceStyle")

echo "Your current mode is: " 

echo $y

echo "What mode would you like? (L=Light) (D=Dark)"

read opt

	case $opt in
		"L") echo "You choose Light Mode." 


			if [[ $y == "Dark" ]] 
			then
					osascript -e 'tell app "System Events" to tell appearance preferences to set dark mode to false'
			else 
				echo "You are already in light mode"

			fi

		;;

		"D") echo "You Choose Dark Mode"
			
			if [[ $y == "Dark" ]]  
			then
					echo "You are already in Dark mode"

			else 
				osascript -e 'tell app "System Events" to tell appearance preferences to set dark mode to true'
			fi
			

	esac



