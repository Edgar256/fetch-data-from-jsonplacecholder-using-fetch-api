<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Getting data using the Fetch API from JSON Placeholder</title>
</head>
<body>
    <div class="container">
        <h2 class="center-text">Getting data using the Fetch API from JSON Placeholder</h2>
        <div class="row">
            <span><button class="btn btn-success" id="getPosts">GET POSTS</button> </span>
            <span><button class="btn btn-success" id="getComments">GET COMMENTS</button> </span>
            <span><button class="btn btn-success" id="getPhotos">GET PHOTOS</button> </span>
            <span><button class="btn btn-success" id="getTodos">GET TODOS</button> </span>
            <span><button class="btn btn-success" id="getUsers">GET USERS </button> </span>
        </div>
        <div class="row">            
            <div id="posts" class="posts"></div>
        </div>
        <div class="row">            
            <div id="comments" class="posts"></div>
        </div>
    </div>
</body>
<script>
    
    let res = '';

    function getPosts(){
        fetch('https://jsonplaceholder.typicode.com/posts')
            .then((res) => res.json())
            .then((data) => {
                console.log(res)
                let output = `<h2>Posts</h2><div class="posts"> `;
                data.forEach(post => {
                    output += `
                            <div class="post">
                                <h5>ID : ${post.id} </h5>
                                <p>Name : ${post.title} </p>
                                <p>Email : ${post.body} </p>
                            </div>
                        
                    `
                });

                document.getElementById('posts').innerHTML = output;
        })
        .catch((err) => console.log(err))
    }

    function getPhotos(){
        fetch('https://jsonplaceholder.typicode.com/photos')
            .then((res) => res.json())
            .then((data) => {
                console.log(res)
                let output = `<h2>Photos</h2><div class="posts"> `;
                data.forEach(photo => {
                    output += `
                            <div class="post">
                                <p> ${photo.title} </p>
                                <img src='${photo.url}' alt="${photo.thumbnailUrl}" class="image" />
                            </div>
                        
                    `
                });

                document.getElementById('posts').innerHTML = output;
        })
        .catch((err) => console.log(err))
    }

    function getTodos(){
        fetch('https://jsonplaceholder.typicode.com/todos')
            .then((res) => res.json())
            .then((data) => {
                console.log(res)
                let output = `<h2>Todos</h2><div class="posts"> `;
                data.forEach(todo => {
                    output += `
                            <div class="post">
                                <p> Id : ${todo.id} </p>
                                <p> Title : ${todo.title} </p>
                                <p> Status : ${todo.completed} </p>
                            </div>
                        
                    `
                });

                document.getElementById('posts').innerHTML = output;
        })
        .catch((err) => console.log(err))
    }

    function getUsers(){
        fetch('https://jsonplaceholder.typicode.com/users')
            .then((res) => res.json())
            .then((data) => {
                console.log(res)
                let output = `<h2>Users</h2><div class="posts"> `;
                data.forEach(user => {
                    output += `
                            <div class="post">
                                <p> Name : ${ user.name } </p>
                                <p> Username : ${ user.username } </p>
                                <p> Email : ${ user.email } </p>
                                <p> Address : ${ user.address.street }, ${ user.address.suite } - ${ user.address.city }, ${ user.address.zipcode }</p>
                                <p> Geolocation : ${ user.address.geo.lat} , ${ user.address.geo.lng } </p>
                                <p> Phone : ${ user.phone } </p>
                                <p> Website : ${ user.website } </p>
                                <p> Company : ${ user.company.name } </p>                                
                                <p> Catch Phrase : ${ user.company.catchPhrase } </p>
                                <p> Company : ${ user.company.bs } </p>
                            </div>
                        
                    `
                });

                document.getElementById('posts').innerHTML = output;
        })
        .catch((err) => console.log(err))
    }

    document.getElementById('getPosts').addEventListener('click', getPosts)
    document.getElementById('getComments').addEventListener('click', getComments)
    document.getElementById('getPhotos').addEventListener('click', getPhotos)
    document.getElementById('getTodos').addEventListener('click', getTodos)
    document.getElementById('getUsers').addEventListener('click', getUsers())

    
</script>
</html>