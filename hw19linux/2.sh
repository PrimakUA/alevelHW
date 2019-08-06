if -z "$1"

else
    user=$(echo "$1" | cut -d"@" -f1)
    scrot /tmp/$(date +%Y-%m-%d-%H-%M).png
    ssh $1 "mkdir -p /home/$user/public_html/screenshot"
    scp -r /tmp/$(date +%Y-%m-%d-%H-%M).png "$1":/home/$user/public_html/screenshot/
    echo "screenshot.$user.php.a-level.com.ua/$(date +%Y-%m-%d-%H-%M).png" | xclip -selection clipboard
fi
