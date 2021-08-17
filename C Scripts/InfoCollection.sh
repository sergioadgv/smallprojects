#!/usr/bin/bash 


echo "#################################################################"

echo "This program collections information from the current device: "

echo \

echo "Lets beggin!"


echo "#################################################################"

sleep 1

		# User $ Device Information


		echo "_________________________________________________________"

		echo "       User & Device Information"

		echo "_________________________________________________________"

		sleep 2



		echo "User is: " $USER


		echo $y \

		echo "Device Information: "

		system_profiler SPHardwareDataType | grep "Model\ Identifier"

		system_profiler -detailLevel basic | grep -E "Cycle\ Count"

		system_profiler -detailLevel basic | grep "State\ of\ Charge\ (%)"

		sleep 1



		# Possible Commands

		echo "_________________________________________________________"

		echo "       Security Information"

		echo "_________________________________________________________"

		sleep 2

		x=$(eval "compgen -c | wc -l")
		
		echo "There are " $x " commands that we can run as this user." 

		echo \


		sleep 1



		# Network Information

		echo "_________________________________________________________"

		echo "       Network Information"

		echo "_________________________________________________________"

		sleep 2

		echo "This device's internal network IP: " 

		ipconfig getifaddr en0

		echo \

		echo "This device's external IP is:"

		eval "curl ifconfig.me"

		echo \

sleep 1

echo \

echo "Would you like a full report file? (Y/N)"

read opt

	case $opt in

		"Y")
			system_profiler -detailLevel basic > ~/Desktop/system_report_basic.txt

			echo "The report is in your desktop."

		;;

		"N")
			echo "The program will now exit."


	esac

# system_profiler -detailLevel basic > ~/Desktop/system_report_basic.txt


echo "#################################################################"

echo "                  Evaluation Completed"

echo "#################################################################"


# system_profiler | grep "Model Identifier" 







# Use a Checksum to test this instead of sending info like IPs or userdata