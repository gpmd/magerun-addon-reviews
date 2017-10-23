MageRun Addons
==============

Some additional command to reaggregate reviews after creating a new store, using N98-MageRun.

Installation
------------

Please follow [MageRun documentation](http://magerun.net/introducting-the-new-n98-magerun-module-system/) for installation.

Here's the easiest:

1. Create ~/.n98-magerun/modules/ if it doesn't already exist.

        mkdir -p ~/.n98-magerun/modules/

2. Clone the magerun-addons repository in there

        cd ~/.n98-magerun/modules/
        git clone https://github.com/gpmd/magerun-addon-reviews

3. It should be installed.  To see that it was installed, check to see if one of the new commands is in there, like `diff:files`.

        magerun reviews:reaggregate

