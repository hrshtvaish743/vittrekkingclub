git add --all
echo "Enter Commit Message(without space)"
read msg
git commit -m "$msg"
git push https://github.com/vittrekkingclub/vittrekkingclub.git master