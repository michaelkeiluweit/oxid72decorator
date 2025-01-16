# About 
Simple example of decorating a module service within the OXIDs module system.  

# Installation
- Clone this repoistory next to source/ and vendor/
- Register the example modules. See [mod1/README.md](repo/oxs/mod1/README.md) and [mod1decorator/README.md](repo/oxs/mod1decorator/README.md) for further information.

# Usage
Add `?cl=mod1` to the URL to call the controller. If the decorator is active, the output will be **mod1decorator**, else it will be **mod1**.
