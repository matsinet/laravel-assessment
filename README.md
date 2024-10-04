# Laravel Assessment: TODO JSON:API

## Setup
This project should use [Laravel](https://laravel.com/docs/11.x/) to provide an API that can be consumed by a front-end application. Please fork this repository and show us what you've got!

## Requirements
### Design
The API should adhere to the [JSON:API v1.0](https://jsonapi.org/format/1.0/) specification when behaviors are implemented. 

### Functional Requirements
Adherence to the JSON:API specification can be implemented by scratch or by utilizing a library such as [cloudcreativity/laravel-json-api](https://github.com/cloudcreativity/laravel-json-api) or [laravel-json-api/laravel](https://github.com/laravel-json-api/laravel).

A full OpenAPI specification can be found [here](./openapi.yaml) and can be visualized by pasting its contents into [Swagger's online editor](https://editor-next.swagger.io/) to be easier to understand.

A minimal implementation would include the following paths as laid out in the specification:
- /users
- /users/{userId}
- /todos
- /todos/{todoId}

Any additional paths will be considered extra credit.

#### Extra Credit (Just for fun!)
- Not using a library to implement the JSON:API specification
- Full implementation of provided specification file
- Write functional HTTP tests covering core behaviors
- Implement custom meta data for has-many relations such as the count of related resources
- Any additional portions of the JSON:API specification not laid out in the provided specification file, such as [sparse fieldsets](https://jsonapi.org/format/1.0/#fetching-sparse-fieldsets), [sorting](https://jsonapi.org/format/1.0/#fetching-sorting), or a [filtering implementation](https://jsonapi.org/format/1.0/#fetching-filtering)
- Implement custom actions for resources such as POST /todos/{todoId}/-actions/complete to mark a todo as completed instead of using simple CRUD

## Time Estimate
About 2-3 hours, depending on your experience level. There is no time limit, this estimation is for you to plan your time.

## Finished?
Upon completion of this challenge, please send us a link to your sandbox at jylissa.salveson@daysmart.com!

## Issues?
Upon completion of this challenge, please send us a link to your sandbox at jylissa.salveson@daysmart.com!