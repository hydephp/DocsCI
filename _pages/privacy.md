---
title: Privacy and Analytics
---

# About Analytics

## About OpenEvents
This site uses [OpenEvents](https://openevents.desilva.se/) analytics to collect basic anonymous statistics about page views - and nothing else.

This is done through an [OpenEvents Pixel](https://openevents.desilva.se/docs/using-the-pixel).
The pixel works like a beacon which sends information about the page that was viewed to the server.

## View the data
**All data collected by OpenEvents is public**, so you don't have to take my word for it. You can see the data for this site on the [HydePHP OpenEvents Dashboard](https://openevents.desilva.se/projects/bode)

## Data is anonymous

The data is fully anonymous and cannot be used to track you. OpenEvents uses a "pineprint" which is a kind of checksum that groups together requests made by the same user. The pineprint cannot be decoded and is completely diffrent for each page you visit. 

## Opting out
You can opt out from pineprints by sending a "DNT (Do Not Track)" header. To block the pixel completely you can add the following URI to your adblocker blacklist: `https://openevents.desilva.se/api/projects/bode/pixel`.
