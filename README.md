# Grav String Replacer Plugin

`string-replacer` is a [Grav](http://github.com/getgrav/grav) plugin that allows the substitution of a string contained into a post or a page. This is a useful plugin that you can use to add pure HTML, CSS, JS, and any raw content into a post, using a shortcode, or a previously defined string, based on your preferences.

# Installation

Installing the String Replacer plugin can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file. 

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install string-replacer

This will install the Shortcode Assets plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/string-replacer`.

# Config Defaults

```
enabled: true
```

# Usage

Once the plugin is installed you can use the admin panel to add:
1. one or more strings to find into the content of the posts or pages;
2. the equivalent strings to use for substitution (containing plain text, HTML, CSS, JS code, and so on...).
