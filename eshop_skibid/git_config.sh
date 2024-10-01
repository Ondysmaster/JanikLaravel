#!/bin/shß
git config --list
git config --global --unset-all user.name
git config --global --unset-all user.email
git config --global user.name "Ondymaster"
git config --global user.email "ondra.janik24@gmail.com"
echo "Přihlášení bylo úspěšné"
#cd eshop_skibid