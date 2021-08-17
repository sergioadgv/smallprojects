#!/usr/bin/bash 


echo "========================================================"

echo "                 Multifunction Program 1"

echo "========================================================"

#Installation mode 1 is default with medium security settings. 
installationMode=1




deviceInfo (){

	echo "################ Device Information ######################"

	echo "device Info Function"

	echo \

	sleep 3


}


userInfo (){

	echo "################ User Information ######################"


	echo "user information"

	echo \
	
	sleep 3

}

softwareState (){

	echo "################ Software State ######################"

	echo "You have X programs to update. Details: "
	echo \
	
	sleep 3

}

networkStatus (){
	echo "################ Network Status ######################"

	echo \

	echo "This program checks network status and connected devices.\ Lets begin!"

	sleep 2

	echo \

		x=$(eval "")

		y=$(eval "arp -a | wc -l")

		z=$(eval "networksetup -listallnetworkservices")

	echo "There are: " $y " devices in your network!" 

	sleep 1

	echo \

	echo "These services are active: " 

	echo \

	sleep 1

	eval "networksetup -listallnetworkservices"

	sleep 1

}



####  Main Script #####
x=0
while [[ $x == 0 ]]

do

	echo "Welcome to your MFP. \ This software has a variety of versions, please choose your installation mode:\ 1 - Classic  2 - High Security 3 - OpenCorporate 4 - Exit"

	echo "Default Mode: " $installationMode

	read opt

		case $opt in
			"1") 
				echo "######################## Classic Setup #################################"
				echo "The Classic installation includes a basic user info request and software update."
				sleep 1
				userInfo
				sleep 1
				softwareState
				sleep 1
				networkStatus



			;;

			"2") echo "Opt2"

			;;

			"3") echo "Opt3"
			;;

			"4") x=2
				
		esac
done 



