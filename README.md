# Starzplay Arabia test

You need to prepare a php service that loads this URL:

https://peg-dev-public-api.eu.cloudhub.io/api/v0.2/mediaCatalog/layout/?byScheme=urn:peg:layoutDskMoviesPage&lang=en

This service must return to a controller that generates an html page with this structure:

## Page's structure


    ### Module's title
    
    #### Carousel of images. You must select horizontal or vertical images and make a carousel of them.
    
    ### Module's title 
    
    #### Carousel of images. You must select horizontal or vertical images and make a carousel of them.
    
    etc.

## Features

- Buttons in the carousel so the user can go to the next image / previous image by clicking the buttons

- When you roll over a image in the carousel, you must draw over the image the title and description, if available

- Use of framework in the php part instead plain php (Cakephp, symphony, etc)

- Use of framework in the front-end part instead vanillascript (angularjs, emberjs, etc) 

- Responsive layout 

- Carousel can be moved by touch events


