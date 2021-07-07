# lincfolio Docs
This documentation covers the setup of your very own lincfolio profile. May be a little tough for normies, but shouldn't be too bad ;)

## Getting Started
Create a file called `lf.json` on your local machine and open it up in your favorite text editor (eg. Atom.)

Once you've done that, put the following data in that file:
```
{
  "name": "John Doe",
  "job-title": "Ethical Hacker",
  "providers": {
    "accounts": {
      "discord": {
        "name": "Discord",
        "username": "johndahakr#1234"
      },
      "twitter": {
        "name": "Twitter",
        "username": "johntweets",
        "link": "https://twitter.com/johntweets"
      }
    },
    "pronouns": {
      "hehim": {
        "pronoun": "He/Him",
        "status": "Yes"
      },
      "theythem": {
        "pronoun": "They/Them",
        "status": "OK"
      },
      "sheher": {
        "pronoun": "She/Her",
        "status": "No"
      }
    }
  }
}
```

Fill in your own info there. Please note: you CAN add pronouns or accounts that aren't already there. Just make sure you use valid JSON formatting.

Now go to the [LFDB](https://github.com/lincfolio/lfdb) and open a pull request. Congrats, you're done! We will accept your PR as soon as possible.