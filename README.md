# ZSK  Projekt - strona internetowa do nauki języka technicznego

# Devalien

Devalien strona dla każdego ufo - programisty i nie tylko. Możesz tutaj:
  - Uczyć się nowych słówek
  - Dodawać swoje
  - I dodać je do ulubionych


Pamiętaj!

> Każdy głupiec może napisać kod zrozumiały dla komputera.
>Dobrzy programiści potrafią stworzyć kod zrozumiały dla ludzi. 

### Techologia

Devalien używa setki nowych i fajnych rozwiązań:

* [Javascript] 
    - Owl carousel 
    - Ajax
    - ScrollIt
    - JQuery
    - Slicknav
    - Magnific-popup
    - Flip
* [CSS]
    - Boostrap 4 
    - Awesome Fonts
    - cicrle


### Development

Jesteś programistą i chcecesz dowiedzieć się więcej? Świetnie!

Devalien jest pierwszą generacją i ma tylko jedną ale dość ciekawą klasę o takiej samej nazwie. 
W przyszłości będzie ich o wiele więcej.
Klasa ma takie funkcje jak: 

pobranie wszystkich categorii z danymi
        

    getCategories()
pobranie pakietów danego usera
            
    getUserPackages($userid)

pobranie danych danej kategorii 
        
    getCategory($categoryid)
    

pobranie słówkej stworzone przed danego usera 

    getUserWords($userid)

pobranie randomowej list słówek danej kategorii z limitem 
    
    getRandUnionCategoryWords($category)
    
pobranie listy randowmowych słówek z danej kategorii 

    getRandCategoryWords($category,$limit = "")
    
pobranie listy ulubionych słówek danego usera 

    getUserFavorite($user)

pobranie  listy ulubionych słówek danego usera z wszytkimi danymi

    getUserFavoriteAll($user)

zapisanie ulubionych słówkek 

    insertUserFavorite($user,$wordid)
   

zapisanie nauczonych słówek 

    insertUserLearned($user,$data)
