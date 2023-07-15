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
  <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/modrinth/art/main/Branding/Badge/badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/modrinth/art/main/Branding/Badge/badge-light.svg">
  <img alt="Download on Modrinth" src="https://raw.githubusercontent.com/modrinth/art/main/Branding/Badge/badge-dark.svg">
</picture>
</a>

Code:
```markdown
<a href="https://modrinth.com/resourcepack/better-flame-particles/versions">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/modrinth/art/main/Branding/Badge/badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/modrinth/art/main/Branding/Badge/badge-light.svg">
  <img alt="Download on Modrinth" src="https://raw.githubusercontent.com/modrinth/art/main/Branding/Badge/badge-dark.svg">
</picture>
</a>
```

### Shield

https://shields.io/ covers modrinth by default.

Example shield:

<img src="https://img.shields.io/modrinth/dt/better-flame-particles?colorA=181712&colorB=fff5c6&label=Modrinth&style=for-the-badge&logo=modrinth">

Code:

```markdown
<img src="https://img.shields.io/modrinth/dt/better-flame-particles?colorA=181712&colorB=fff5c6&label=Modrinth&style=for-the-badge&logo=modrinth">
```

## Curse Forge

No official asset repository

### Logo

Logo is unusable for inbeds

[Custom made dark mode responsive logo](/curseforge.svg):

<img width="40px" alt="Visit on CurseForge" src="/curseforge.svg">

Code:

```markdown
<img width="40px" alt="Visit on CurseForge" src="URL to the hosted .svg image (e.g. https://svgur.com/)">
```

### Button

[Custom made button](assets/curseforge-badge-dark.svg):

<a href="https://www.curseforge.com/minecraft/texture-packs/better-flame-particles">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="assets/curseforge-badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="assets/curseforge-badge-light.svg">
  <img alt="Download on CurseForge" src="assets/curseforge-badge-dark.svg">
</picture>
</a>

Code:
```markdown
<a href="https://www.curseforge.com/minecraft/texture-packs/better-flame-particles">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="assets/curseforge-badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="assets/curseforge-badge-light.svg">
  <img alt="Download on CurseForge" src="assets/curseforge-badge-dark.svg">
</picture>
</a>
```

### Shield - Not updating anymore since Curse Forge website overhaul

Custom shield service for Curse Forge: https://cf.way2muchnoise.eu/

Example shield:

<img src="https://cf.way2muchnoise.eu/full_782814_downloads.svg?badge_style=for_the_badge">

Code:
```markdown
<img src="https://cf.way2muchnoise.eu/full_782814_downloads.svg?badge_style=for_the_badge">
```

## Planet Minecraft

### Logo

https://www.planetminecraft.com/images/layout/favicon-128.png

<img width="40px" alt="Visit on PlanetMinecraft" src="https://www.planetminecraft.com/images/layout/favicon-128.png">

Code:
```markdown
<img width="40px" alt="Visit on PlanetMinecraft" src="https://www.planetminecraft.com/images/layout/favicon-128.png">
```

### Button

No button available yet

### Shield

No shield service exits that I know of. Made a [custom PHP file](/endpoint.php) to create an endpoint that can be used in shields.io (This file needs to be hosted on your own webserver with php installed)

Example shield:

<img src="https://img.shields.io/endpoint?logo=data%3Aimage%2Fwebp%3Bbase64%2CUklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ%2FAJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb%2Fk3sYgGvraJIkpq5E3C60M%2BfbwYBmfkPAPj%2F78kRNnPJKxVqPkwCMQgq%2FI1Morbke9f%2Fcc5p9Qji1EawYTDAtm2rakNT77bBxv%2F%2FWo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki%2BUOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi%2FFAHe2mh%2FOKOA0envTquspCFwvcwECTMv7VW5ST2f%2BF6y1Uzm4R0lWLv%2B5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b%2BrncmpS7u4%2BdPfKvBOukW6Fqk1Ss1R9shQp%2F37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ%2BJGIIB&style=for-the-badge&url=https%3A%2F%2Ftschipcraft.ddns.net%2Fmod_resources%2Fendpoint.php%3Fproject%3Dtexture-pack%2Fbetter-flame-particles">

Code:
```markdown
<img src="https://img.shields.io/endpoint?logo=data%3Aimage%2Fwebp%3Bbase64%2CUklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ%2FAJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb%2Fk3sYgGvraJIkpq5E3C60M%2BfbwYBmfkPAPj%2F78kRNnPJKxVqPkwCMQgq%2FI1Morbke9f%2Fcc5p9Qji1EawYTDAtm2rakNT77bBxv%2F%2FWo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki%2BUOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi%2FFAHe2mh%2FOKOA0envTquspCFwvcwECTMv7VW5ST2f%2BF6y1Uzm4R0lWLv%2B5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b%2BrncmpS7u4%2BdPfKvBOukW6Fqk1Ss1R9shQp%2F37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ%2BJGIIB&style=for-the-badge&url=<URL to PHP file>?project=texture-pack/better-flame-particles">
```

project= defines the url slug for the project e.g. for planetminecraft.com/texture-pack/better-flame-particles/, it's texture-pack/better-flame-particles. Make sure to actually encode the URL to the hosted PHP file. For better configuration, use [the already available documentation on shields.io for endpoints](https://shields.io/endpoint).

### Alternative shield

If you don't want to use the endpoint solution, you can also directly embed [this custom PHP file](/badge.php).

Example shield:

<img src="https://tschipcraft.ddns.net/mod_resources/badge.php?project=texture-pack/better-flame-particles/&style=for-the-badge&logo=data:image/webp;base64,UklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ/AJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb/k3sYgGvraJIkpq5E3C60M+fbwYBmfkPAPj/78kRNnPJKxVqPkwCMQgq/I1Morbke9f/cc5p9Qji1EawYTDAtm2rakNT77bBxv//Wo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki+UOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi/FAHe2mh/OKOA0envTquspCFwvcwECTMv7VW5ST2f+F6y1Uzm4R0lWLv+5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b+rncmpS7u4+dPfKvBOukW6Fqk1Ss1R9shQp/37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ+JGIIB">

Code:
```markdown
<img src="<URL to badge.php>?project=texture-pack/better-flame-particles&style=for-the-badge&logo=data:image/webp;base64,UklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ/AJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb/k3sYgGvraJIkpq5E3C60M+fbwYBmfkPAPj/78kRNnPJKxVqPkwCMQgq/I1Morbke9f/cc5p9Qji1EawYTDAtm2rakNT77bBxv//Wo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki+UOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi/FAHe2mh/OKOA0envTquspCFwvcwECTMv7VW5ST2f+F6y1Uzm4R0lWLv+5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b+rncmpS7u4+dPfKvBOukW6Fqk1Ss1R9shQp/37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ+JGIIB">
```

project= defines the url slug for the project (for https://planetminecraft.com/texture-pack/better-flame-particles/, it will be texture-pack/better-flame-particles)<br>
style= uses the same format as the https://shields.io/ website.<br>
logo= defines a converted planetminecraft logo


# Supported versions display

[This PHP file](/supported/supported.php) creates a image that displays the supported Minecraft versions for your project.
Make sure to include all assets in the subdirectory if you want to host and use it.

untested_versions= defines a range of versions that have not yet been tested. A question mark will appear.<br>
supported_versions= defines a range of versions that are supported. If the progress bar is enabled it will get filled. If icons are enabled, a green checkmark will appear.<br>
total_versions= defines a range of versions that should be displayed. Any version not specified here will not get shown.<br>
icons= defines whether icons are shown or not. (true/false)<br>
desaturated_icons= defines whether icons should use their desaturated version or not. (true/false)<br>
progress_bar= defines whether a Minecraft-styled progress bar is shown. (true/false)<br>
mc_background= defines whether a Minecraft button will be used as the background. (true/false)<br>
platform= defines a platform where this image will be displayed. based on this information the background color will take on the exact color value of the dark mode version of the specified platform. (modrinth/curseforge/none)

Example:
<img alt="Supported versions" src="https://tschipcraft.ddns.net/mod_resources/supported/supported.php?untested_versions=1.20&supported_versions=1.17,1.18,1.19&total_versions=1.13,1.14,1.15,1.16,1.17,1.18,1.19,1.20&icons=true&white_mode=false">

Code:
```markdown
<img alt="Supported versions" src="<URL to file>?untested_versions=1.20&supported_versions=1.17,1.18,1.19&total_versions=1.13,1.14,1.15,1.16,1.17,1.18,1.19,1.20&icons=true&white_mode=false">
```
