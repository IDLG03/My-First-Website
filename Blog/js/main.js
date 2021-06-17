var latest = document.getElementById("latest");
if (latest) {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', mydata.siteURL + "/wp-json/wp/v2/posts?per_page=5");
    ourRequest.onload = function() {
        
        var data = JSON.parse(ourRequest.responseText);
        createHTML(data);
        console.log("hi")
    };
    ourRequest.send();

function createHTML(postsData) {
    var ourHTMLString = '';
    for (i = 0; i < postsData.length; i++) {
        ourHTMLString += '<hr><h2><a href="'+ postsData[i].link + '">' + postsData[i].title.rendered + '</a></h2>';
        
    }
    latest.innerHTML = ourHTMLString;
}
}

var addpost = document.querySelector("#post");

if (addpost) {
    addpost.addEventListener("click", function() {
    var ourPostData = {
    "title": document.querySelector('.new-post [name="title"]').value,
    "content": document.querySelector('.new-post [name="content"]').value,
    "status": "publish"
    }

    var createPost = new XMLHttpRequest();
    createPost.open("POST", mydata.siteURL + "/wp-json/wp/v2/posts");
    createPost.setRequestHeader("X-WP-Nonce", mydata.nonce);
    createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    createPost.send(JSON.stringify(ourPostData));
    createPost.onreadystatechange = function() {
        if (createPost.readyState == 4) {
            if (createPost.status == 201) {
                document.querySelector('.new-post [name="title"]').value = '';
                document.querySelector('.new-post [name="content"]').value = '';
            } else {
                alert("Error - try again.");
            }
        }
    }
    });
}
