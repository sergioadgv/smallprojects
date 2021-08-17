#!/usr/bin/bash 

echo \

echo "This program checks network status and connected devices. Lets begin!"

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


