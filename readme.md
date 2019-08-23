
Advanced Eloquent Tutorial

[Link to tutorial](https://laracasts.com/series/advanced-eloquent)


So this tutorial was about how eloquent works, to be honest I thought that the tutorial was going to be about more obscure functions that usually we don't use or how to utilize eloquent better but it was more technical, it was about discovering how eloquent forms a query in the background.

Even tho this wasn't what I expected I used some library that are very helpful to do migrations or pupulate dummy data for testing

-[Laravel Generators](https://github.com/laracasts/Laravel-5-Generators-Extended)
-[Laravel Testdummy](https://github.com/laracasts/TestDummy)

I was able to understand how eloquent create the sql query and how I can look for more functions that I can use to get information from the database. The tutorial also shows how to read the information on the function so you can use the functions better and pass information that is more legible.

Like you can replace this 
-Post::where('foo', 'bar')->where('baz', 'biz')->delete();
to this
-Post::where(['foo' => 'bar', 'baz' => 'biz'])->delete();
