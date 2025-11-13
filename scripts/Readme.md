si besoin pour le git pull : `sudo chmod +x /var/www/sfp1-2025/scripts/gitpull.sh`
sudo chown -R www-data:www-data /var/www/sfp1-2025

# exécuter en tant que l'utilisateur qui lancera git (www-data si depuis PHP)
sudo -u www-data git config --global --add safe.directory /var/www/sfp1-2025
# ou, si tu exécutes depuis ta session root/ton user:
git config --global --add safe.directory /var/www/sfp1-2025
