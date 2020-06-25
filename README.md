# lara-docker
it's just configuration environment using docker for laravel applications

what is the problem I have faces during prepare this configuratrion :
- sturcutre of the yaml file I put the ports, container_nam, volumens
into the builder of php service.
- the `docker-compose build && docker-compose up -d` is not work because need a persmision `sudo`
- the docker is not build the container because need a proxy 

## Installation
- first download docker for your machin
- docker-compose build && docker-compose up -d


## api documentaion

```
GET /api/apiTest HTTP/1.1
Host: 127.0.0.1:8088
Content-Type: application/json
```

Body 
```
[
  {
    "id": 1,
    "title": "Ab quam ut sunt numquam accusantium quod corrupti. Fugiat eos sequi deserunt fugiat doloremque iusto praesentium. Reiciendis vero facilis ut repellendus et voluptas dicta voluptas.",
    "is_complete": 1,
    "user_id": 1,
    "created_at": "2020-06-25T22:31:06.000000Z",
    "updated_at": "2020-06-25T22:31:06.000000Z"
  },
  {
    "id": 2,
    "title": "Ex enim deleniti fugit ab nisi quia. Neque eum a est molestias magni. Et aut nihil ut perspiciatis.",
    "is_complete": 0,
    "user_id": 1,
    "created_at": "2020-06-25T22:31:06.000000Z",
    "updated_at": "2020-06-25T22:31:06.000000Z"
  },
  {
    "id": 3,
    "title": "Dolor similique ea laboriosam minima eveniet. Praesentium dolorem ut expedita. Et neque suscipit cumque commodi est perspiciatis.",
    "is_complete": 1,
    "user_id": 5,
    "created_at": "2020-06-25T22:31:06.000000Z",
    "updated_at": "2020-06-25T22:31:06.000000Z"
  },
  {
    "id": 4,
    "title": "Voluptatem ut tenetur molestiae et soluta ut voluptatem. Et inventore exercitationem enim voluptatem molestiae. Nihil nemo perspiciatis unde inventore veniam pariatur. Nesciunt tempore velit debitis temporibus architecto sit.",
    "is_complete": 1,
    "user_id": 4,
    "created_at": "2020-06-25T22:31:06.000000Z",
    "updated_at": "2020-06-25T22:31:06.000000Z"
  }
]
```
