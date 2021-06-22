const posts = document.querySelector(".posts");

function postsdata() {
  console.log("run");
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/dataposts.php", true);
  xhr.onload = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        // get data form php
        let data = JSON.parse(xhr.responseText);
        console.log(data);
        // start load data to html
        data.forEach((post) => {
          posts.innerHTML += `    <!--- post here-->
        <div class="card text-dark border-primary bg-light m-4" style="max-width: 18rem">
          <div class="card-header "><h6>${post.time}</h6></div>
          <div class="card-body">
            <!--title post -->
            <h5 class="card-title p-1 ">${post.title}</h5>
            <p class="card-text">
             ${post.content}
            </p>
          </div>
        </div>
        <!--end post-->
          `;
        });
        // End load data to html
      }
    }
  };
  xhr.send();
}
postsdata();
