#############################################################################
# 			 App Installation Script
#############################################################################



#!/usr/bin/bash 


# User Validation

echo "User is: $USER"

sleep 1

if [ $USER == "guestusername" ] 

then
	echo "Current User is a Guest"

else
	echo "User is root! Dont Run this policy!"

fi

sleep 1 

# App Installation 

echo "#################################################################"

echo "      App Installation & Update"

echo "#################################################################"



		echo "_________________________________________________________"

		echo "       App Installation"

		echo "_________________________________________________________"


		echo "Is the app installed? Lets check the Applications folder..."

		sleep 1

		if [ -d "/Applications/Sublime Text.app" ]

		then
			echo "Sublime Text is already installed, this program will quit now."

		else
			echo "Sublime Text is not Installed!"

			echo "The program will now install Sublime" 

			
				
				if hdiutil mount "/Users/sergiodigiacinto/Desktop/Resources/Sublime Text Build 3211.dmg" 1>/dev/null
				then 
					echo "Disk Mounted"

					sleep 1

					if cp -R "/Volumes/Sublime Text/Sublime Text.app" /Applications
					then 
						echo "Installation Succesfull!"
						sleep 1 
						echo "Lets unmount the program drive."

						if diskutil unmount force disk2s1
						then 
							echo "Unmounting successfull!"
						else
							echo "Couldn't unmount"
						fi

					else 
						echo "There was a problem copying the App file into the folder."
					fi

					sleep 1



				else 

					sleep 1

					echo "Disk Not Mounted"

				fi

				


		fi


sleep 1





		echo "_________________________________________________________"

		echo "       Software Update"

		echo "_________________________________________________________"


		softwareupdate -l 

		softwareupdate -l | grep "*"

		softwareupdate -i "name"




		# OTHER: Check if Apps are Up to Date


		#echo "What Apps does this system have?"

		#sleep 1

		#defaults domains | tr ',' '\n'




		#Checks the list of apps to update
		# softwareupdate --list  
		# softwareupdate --install {appname}

		# org.mozilla.firefox






