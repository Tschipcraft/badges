# Badges

This repository houses logos, button and shields for various minecraft-related websites to enhance your README.md pages!

It also features a supported version display that can be embedded on Curse Forge, Modrinth and GitHub.

# Logos, Buttons and Shields

## Modrinth
Assets ranging from logos to buttons can be found at https://github.com/modrinth/art

### Button

Example button for github:

<a href="https://modrinth.com/resourcepack/better-flame-particles/versions">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://github.com/modrinth/art/blob/main/Branding/Badge/badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="https://github.com/modrinth/art/blob/main/Branding/Badge/badge-light.svg">
  <img alt="Download on Modrinth" src="https://github.com/modrinth/art/blob/main/Branding/Badge/badge-dark.svg">
</picture>
</a>

Code:
```
<a href="https://modrinth.com/resourcepack/better-flame-particles/versions">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://github.com/modrinth/art/blob/main/Branding/Badge/badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="https://github.com/modrinth/art/blob/main/Branding/Badge/badge-light.svg">
  <img alt="Download on Modrinth" src="https://github.com/modrinth/art/blob/main/Branding/Badge/badge-dark.svg">
</picture>
</a>
```

### Shield

https://shields.io/ covers modrinth by default.

Example shield:

<img src="https://img.shields.io/modrinth/dt/better-flame-particles?colorA=181712&colorB=fff5c6&label=Modrinth&style=for-the-badge&logo=modrinth">

Code:

```<img src="https://img.shields.io/modrinth/dt/better-flame-particles?colorA=181712&colorB=fff5c6&label=Modrinth&style=for-the-badge&logo=modrinth">```

## Curse Forge

No official asset repository

### Logo

Logo url is https://www.curseforge.com/Content/2-0-8426-30189/Skins/CurseForge/images/anvil.svg but unusable for inbeds

[Custom made dark mode responsive logo](/curseforge.svg):

<img width="40px" alt="Visit on CurseForge" src="/curseforge.svg">

Code:

```<img width="40px" alt="Visit on CurseForge" src="URL to the hosted .svg image (e.g. https://svgur.com/)">```

### Button

Custom button for github (no svg, no white mode, hosted on imgur):

<a href="https://www.curseforge.com/minecraft/texture-packs/better-flame-particles">
<img alt="Download on CurseForge" src="https://i.imgur.com/zcIcoGb.png">
</a>

Code:
```
<a href="https://www.curseforge.com/minecraft/texture-packs/better-flame-particles">
<img alt="Download on CurseForge" src="https://i.imgur.com/zcIcoGb.png">
</a>
```

### Shield

Custom shield service for Curse Forge: https://cf.way2muchnoise.eu/

Example shield:

<img src="https://cf.way2muchnoise.eu/full_782814_downloads.svg?badge_style=for_the_badge">

Code:
```
<img src="https://cf.way2muchnoise.eu/full_782814_downloads.svg?badge_style=for_the_badge">
```

## Planet Minecraft

### Logo

https://www.planetminecraft.com/images/layout/favicon-128.png

<img width="40px" alt="Visit on PlanetMinecraft" src="https://www.planetminecraft.com/images/layout/favicon-128.png">

Code:
```
<img width="40px" alt="Visit on PlanetMinecraft" src="https://www.planetminecraft.com/images/layout/favicon-128.png">
```

### Button

No button available yet

### Shield

No shield service exits that I know of. Made a [custom .php file](/badge.php) to get functionality (This file needs to be hosted on your own webserver with php installed)

Example shield:

<img src="https://tschipcraft.ddns.net/mod_resources/badge.php?project=texture-pack/better-flame-particles/&style=for-the-badge&logo=data:image/webp;base64,UklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ/AJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb/k3sYgGvraJIkpq5E3C60M+fbwYBmfkPAPj/78kRNnPJKxVqPkwCMQgq/I1Morbke9f/cc5p9Qji1EawYTDAtm2rakNT77bBxv//Wo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki+UOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi/FAHe2mh/OKOA0envTquspCFwvcwECTMv7VW5ST2f+F6y1Uzm4R0lWLv+5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b+rncmpS7u4+dPfKvBOukW6Fqk1Ss1R9shQp/37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ+JGIIB">

Code:
```
<img src="URL to badge.php?project=texture-pack/better-flame-particles&style=for-the-badge&logo=data:image/webp;base64,UklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ/AJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb/k3sYgGvraJIkpq5E3C60M+fbwYBmfkPAPj/78kRNnPJKxVqPkwCMQgq/I1Morbke9f/cc5p9Qji1EawYTDAtm2rakNT77bBxv//Wo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki+UOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi/FAHe2mh/OKOA0envTquspCFwvcwECTMv7VW5ST2f+F6y1Uzm4R0lWLv+5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b+rncmpS7u4+dPfKvBOukW6Fqk1Ss1R9shQp/37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ+JGIIB">
```

project= defines the url slug for the project e.g. for planetminecraft.com/texture-pack/better-flame-particles/, it's texture-pack/better-flame-particles
style= uses the same format as the https://shields.io/ website
logo= defines a converted planetminecraft logo

Other shield options from https://shields.io/ can be used!


# Supported versions display

<img alt="Supported versions" src="https://tschipcraft.ddns.net/mod_resources/supported/supported.php?untested_versions=1.20&supported_versions=1.17,1.18,1.19&total_versions=1.13,1.14,1.15,1.16,1.17,1.18,1.19,1.20&icons=true&white_mode=false">

// TO-DO: Add documentation
