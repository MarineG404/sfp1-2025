# cd /var/www/sfp1-2025
# echo "Executing git pull in /var/www/sfp1-2025"
# echo root-password | sudo -S git pull
# echo #!/bin/sh
# set -e

# cd /var/www/sfp1-2025 || { echo "Répertoire introuvable"; exit 1; }

# echo "Exécution de git pull dans $(pwd)"
# /usr/bin/git -C "$(pwd)" pull 2>&1 | tee /tmp/gitpull.log
# echo "Git pull executed."
#!/bin/sh
set -e

REPO="/var/www/html/sfp1-2025"
LOG="/tmp/gitpull.log"

cd "$REPO" || { echo "Répertoire introuvable: $REPO"; exit 1; }

echo "Exécution de git pull dans $(pwd)" | tee "$LOG"
# utilise le chemin complet de git pour éviter problèmes de PATH
/usr/bin/git -C "$(pwd)" pull 2>&1 | tee -a "$LOG"
echo "Fin de git pull" | tee -a "$LOG"

