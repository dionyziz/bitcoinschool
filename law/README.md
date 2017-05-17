Template:

Read Only by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

# Translation

When you've changed gettext strings in the source files:

```
xgettext --from-code=UTF-8 -o locale/en_US/LC_MESSAGES/messages.po index.php
msgmerge -U locale/el_GR/LC_MESSAGES/messages.po locale/en_US/LC_MESSAGES/messages.po
msgfmt -o locale/en_US/LC_MESSAGES/messages.mo locale/en_US/LC_MESSAGES/messages.po
msgfmt -o locale/el_GR/LC_MESSAGES/messages.mo locale/el_GR/LC_MESSAGES/messages.po
```
