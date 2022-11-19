@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>



        <div class="container">
            <h3 class="text-center bg-warning ">{{__('lang.choose_panel')}}</h3><br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVEhQSFBYREhISFRgSEhIUGBIYEhUcGBUaGRwYGBgcIS4lHR4rHxgcJjgmKzAxNTU1GiQ7TjszPy40NTEBDAwMEA8QHBISGjEhISM0PTQ0MTQ0NDExNDg2MTQ/NDQxNDQ0MTQ0NDQxMTY0NDQ0NDQ0NDQxMTQ0MTE0MTQ0Mf/AABEIAOMA3gMBIgACEQEDEQH/xAAbAAEAAQUBAAAAAAAAAAAAAAAABQIDBAYHAf/EAEIQAAIBAgMFBAcFBQYHAAAAAAECAAMRBBIhBQYxQVETYXGBByIyQpGhsSNSYoLBFHKSotEzNFOywuEVFiRDc7Pw/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAECAwQF/8QAJBEBAQACAQQCAgMBAAAAAAAAAAECEQMEEiFBMVEicRMygRT/2gAMAwEAAhEDEQA/AN2iIgIiICIiAiIgJ5PZoW/e1alSquzqDFcyhsUy+1Z/ZpDpcanqCOVwYt0mS26jYcbvZgqLFHrqCDY5VquoNr2LIpF7crzU8bvXi8Y5p4JTh6N7CsRes46qOCj59/KZmzt1MPST1wHYL6x6WHWYGwNpIpanZVJN1bm34TMsuX6b48PuvcLuUGPaYh2qOdWZ2LsfHWSibqYYC2UfBZk/tvfH7b3zO5WtZjr4iMxe5tBh6oW/eAPmJiJVxuBYZKj1KYP9lWJemRbgrH1l8j5GTrYzvt3zBxGIqWIulVDxRgAfIiJlZ7TcZl8xsOwN46eKGWxp11F3osbnvKN766ctRpcC8m5xrGuUqLUTPTdWzL95COjc5vu6G8pxINKrlFdFzBhoKijQtbkwNrjhrccwNsc+7xWHJw3HzPhtERE0YEREBERAREQEREBERAREQEREBERATmexqnaYmvidC1aq5QkiwUtZTfoEAnSMSxFNyouwRio43IU2FpxrCYvJSVVNvVy+RWx+Uz5b4034Md21JbwbbZ2NNGIpLppoX/E39JBK5BuDqOcmtibJNQhiuYn2VPC3UzZcVuuWpkcTxsBa3ges59+XZJI1zAbQL2QkB+V9A3+8ymquDlIIboePl1kLj9nPSJzAlfvjh59DLuH2xUVQjhKqDgtQElf3XBDD4yVbEj+1mP2yYD7XufYUjvZiw8HFjb968sVMYDwQDwOv0t8hGhJ1aqOMr+Tcx49RI6hVbDYhKqnWm4bT3l4MvmpI85jftJ7pTUqFuMTwWbmnb1YEAjUEXB6g8JVIzdyoWweGJuT2KAkm5OVQtyeptfzknOuPPs1dEREIIiICIiAiIgIiICIiAiIgIiIHh4ThmGpE5adiGOVCOYOgncajhVLHgoLHwAvOaYXY7pj6WYfZ1HeojcdAC2U/iGkx5bPDq6eXy3zd/ZYSmotrYX/pNiTCi0tYBNBJRBK44+E55XaBx2xEe5IsTzH6zVcfuOhJKqAeqEr8uE6QySw9OLiY8lckq7ksOHafFD+kpXdBh7jt+8wH0tOqvREx6lETOytsc3Nm3eZVPqoO7S5mpY2jkqMnCx0nZMXRnOdvbMepizTprclAxvooFzqTK43V8r73G97r/wByw/8A4l+klZH7Bp5MLQp6EpTVHte2ZRZuPLNc+BEkJ24/Eebn/akRElUiIgIiICIiAiIgIiICIiAiIgYO1m+zA19d1U28b692lvOGwYVabkXs1/C4IuPImXNo0i9NgurCzqOpU3t52tLVXHhqQI1BUETk5/GUtd/S+cbJ9p/CcJnoZE4WrpJGm8vhkz5MV4yhjPS0tO0vazkUMZj1DKneYtSpMcq2xjHxMjcJgQ9V25kAMe5b2HxJmZiKks4XEZVY98xtnt04y68Gz1KvWTkGB8yNfoJnTC2cCQ1Qgg1HuL/dGg0+J8xM2d3HNYx5vLZc7YRES7MiIgIiICIiAiIgIiICIiAiIgJEY/DZM7gXptq680J0zL1B4kefhLyirTDKyG9mUqbcbEWlM8JljqtOPO4ZbjHwGI4ScoVJp2Ccqcre0hKN4g2mxYWvpOXG6duWO5uJYvLFSpKO0lirUl7mzmLyrUmDWrT2tUkdiKs588m+OLzE15VgqfaLYgimD6x5ufujoOp8usja9S/DX6zY8HRyU0Tmo18TqfK5M04MZnd30pz53DHU+auqAAALADQAcBPYidzziIiAiIgIiICIiAiIgIiICIiAiIgIiIENtalkcVBor2R+5h7LHxGnkJcwmJ5RvL/dX/ep/wDtSQmExR0DaHkeRnFzaxy/b0OC3LDz6baleU1KsiKeKlxsTMrk2mK5XqSNxFSV1q8j8TiLd5mdaRn7KwpeoGPsUyGY9W91f1PhbnNkkNuub0nJ/wAVv8iSZnocOMmE17eZ1GVud36IiJswIiICIiAiIgIiICIiAiIgIiICInkD2WsRiFpozuyoiDMzsbKo7zIraW9WDoXz16ZYaFKd3cHoQt7edpz3be2quOqXbNTw6m9Oh4Xs724vrw4L46mZB1DdnEUtoU6zhHFMM1Knm0LWAvUC+7fNYX1FuV5g/wDB7F6L+2nA/eHIyv0UOFoOnSow/lU/rNv2xs/OBUXSomo7+oMx5uPu/cb8PL23Xquf1sFVp8BmXvmM2JI4qQZu9FgwsRqNCDxBkftHCJqbCcdwd8yahUxDHgLfWWlQkhVBeo5yoo4kmZOOYKbAa3sANSTyAHWbludu6aY/aKw+1Yeqp9wdPHrHHxXLJXl5Zhjv2tPs9MDhFq1GIAZe3fUgZ2C5rcgCRryHhL6kEAixBFwRwIPMSn0j4gf8NxA6qiD81VF/Wcq2JvPXwidnlFekPZpszKU04I+uUd1iOltZ6Mx1PDzLlu7rrETVNn7+4WpYP2lBjp663T+NL2HebTZsPXR1Do6Oh1Doysp8CNIQuxEQEREBERAREQEREBESO25tNcNQeqbFvZpqffcg2HhoSe4GBnu4UFmIVRxZiAB4kyAx2+GFpg5Wau33aQuP4zZbeBM0DFYiriGz1naoeIzeyv7qjRePISqnhJMiNprHb74h7iklOiDwY3eoO/Wy/IzXcfia9e/bValQHirN9n/ALKPISQTCyuphfVMnSNoLCbOzte2g4f1k5TwdhwkjhMIFUTI7IS0RalPR/VyVKlP8St8Rb/TOmUqk5RsV8mJHLMtvgQf6zoYxqohqOyoii5ZjYD/eUy+Vp8L20dnZvtKej8xybxms7QxL37PI5qHQIBqf9u+YO3t+cQXWlg0Chwft6gu2ht6icBy1a/hNcxdDHBhiTiavbDUNm/0+zbutaJ0l5PM8bT/2zi/G+XQt3918jCvXs1Tiie6nh1PfNixNawsJzndn0jOXXDY1QHY5UxCCysfxr7viNO4Tc61e4uDcHUGMuK8d7bNH8v8AJ+W9tX9Ide+FWn/iVUHkoL/VROfvgLrwm374V89SjT5KGc+ZAH0MjVpi0tj8K5NKxGCytw0MuYZXptnpvUpt95GZSfG3GbLj8ICDI/D4e668iR8I0bSOzt9MSlhWVK6820Sp8QMp8LDxm0bN3rw1awz9k59ytZL+DXynwveaO+FmLVwsjSduvxOUbN2rXwxHZucgOtJ9abDpb3fFbcBx4TpOyNppiaQqJp7robZkYcVP1B5ggyNJZ0REgIiICIiAmg7843PXSgD6tFQzC/vuL6juW38Rm+O4UFmNlUFiegAuTORV8UatV6p41HZ7dAToPIWHlJiKv0EmbTSYdFplI8sispVEqIExxUnvayUMunW08JX2si2q2bxnvbSUMytilRlqNfKhzNYXNrG9hNj2VRfGhKtX1aQ/s6fIDqerd80rE1LqR3ToG6WKDYdAOQH0lKtjWVtrZ6LTpuigdm1j4NYfULI3atuz8pK7exeTDvb2nHZr+bj8rzQMbTcr7T26Zmno9JLcfPqvL62zHk8e4zN1dlCvimdhenTBufxHh8vrNlrM2FbIxJoMfVb7h/pI/cDFfZVKZ9pHv3kNrr53k7tp1ak4fhYk905eqty5bv07ulkx4pr20naeIz4pzxyZUHkL/Ume9rIPB1OfU3mX20yjWsrF1/VM8opZQO7WRxqZnA5D1j5TNFWBdZRMaokrNSW3eBh16cldycZ2eKNMmy11K25Z0BZT3aZh5iRlZpiJiTTqJUXjTdagHXKwNvO0ixMrsUSinUDKGXVWAZT1BFxK5RYiIgIiIEBvtjOzwdQaXrWogHmH9rx9QNOa0TNn9JWMvUoUAdERqrDTi5yr36BG/i58tTpNL4q1II8vq8wEeXO0koZnaR2kxO0jtJKGRUqc+kp7SWGeWlfl0gZbPpNn3HxmjU78CZp2eSW7GKyYi3JpW/CY3XbtbNUSnyUFz4nQfQ/GYWIoDJAfPXduQbKPy6fUGZmKT1Z6nHO3CR43Je/ktQm7NbJi2XlUQjzBuPqZKb343Jh311YZB+Y2+hM1xXyYqm/RwD56frKt+cXc06Y5k1D5Cw/zH4Tl6zHXJL9x6HR5b47Pqoag9hKmraTCV5Q73066TmdKQwr8W68PATJ7SYSPYAdJV2kDL7SeM8xe0nhqSULjvMSsZW7zGqtIWjqO5mLz4Kl1p3okdMhsv8uWT00H0aYv1sRQPPLWX/I/+ib9KVYiIkBETD2ti+xw9at/h03cd5Cmw8zYQOSbz43tcbiH90Oaa8OFP1L+ZUnzmEjTFpjrqeZ698yEl4rWQrwz6HwlAh+B8JZC7njPLS8BPYQuZ5bZ9YlLCEq80rw2IyVEqdDrLSmU1RpJRXQd3jmUMeJ1Ml8cPVkHuZUzUx3Sex3CenbuvGk1tpW1RZrjkbyG23iu1xBbkqqg+Fz8yfhJzaumYngBczVaWtyeJN5h1mtY/bs6Pfn6XZQh9a/SKjWEIth9Zwu5fDxnluJKFzPPM+vlKJSOJ8oFxnll2lZlp5CUvuXi+zx9G9rVM1Ek/jX1f5lUec6/OCJVKOlRfaputRfFGDD5id3o1Q6K6+y6h18GFx9ZWrRciIlUk1D0lYvJgxT51qqL5J65PxVfjNvmielDAO9OjXW5p0S61APdD5LOe66W/MO+IOfJL6zGQy+jS6tXhPH4GeAw50Msh6h0lUt0jpLl5ATwz2JKFC6HxlREpYSpTcQlsu5OKszJ3zcMa3qzm+xK+SuOjf8A36zfq1W6X7p6HFe7GV5PPj28ln+tR3jq2RhzYhfjx+V5AINJIbw1c1RV6esfPQfQyPZrCc3U5bz19O3psdYb+1B1buGsuiW6a/E6mXZzukiIkoJQh4+MqY6S3T4SErhltpUTLbmBZedd3GxXabPodaamifyMVX+UKfOchczonosqMaOIUg9mtVSre7mZBmUa8gqnh73wrVo3qIiVSSl0DAqwDKwIZSAQQdCCOYlUQOdbf3CZS1TCHOpJJoOQGXuRjoR3MR4mabiaD0myVUem3JXVlJt0vx8p3eW6tJXGV1V1+6wDD4GTKjThQeelp1+tuvgn44akv7gKfJCJif8AJGBtpTcd/a1bj4tLdyNOVoZczTd9pej7icPV6kU63yAdBw8VPjNVx+wcVQv2lGplFz2iDPTsOZZL5fO0bNMMNPbywryoPJQuEzxDrbrKc0oYwMgNlZW6GbnSxd6QPdNJvmWZ+GxxFFtdVBHnwE7OlznmX9uHrOO245T9MTE1M9V35ZrDwGn6Sw5ubchqZ4pst5SnzOpnJll3W37dmOPbJPpfWVXloNGaQsuXnhaWy8oZ7cYFx2lKtpJbZW7mJxFilNkQ/wDcqXSny1FxduPIGbpgtwsMqr2peq4vmIYoh8FXUW8eXlItTI5oXihTeo2Smj1H+6isza9wnX8PupgktbD02tb28z3t1zkj+slqVJUGVFVF+6oCj4CRs05jsfcPEVCGxH/T0+agq1ZvAC6r4nXunSdn4FKFNKVJQlNBYDidTckk8STqTMmJFqxERICIiAiIgIiICIiBHY/YWGra1aNN2+/bLU/jWzfOa9jfR9Qa5pVKtI8g1nT4GzfzTcojY5nivR/iV9h6NQd+dGPHkQR097n3XkTW3UxyE3w7sBpdGpsDpyAa/wAp2KJPcjTia7JxKsVbDYrvtRrML9xVSD5Shtl4m5Aw2Lymx/sK/L8vh8J2+JaZWfCLjL8uLnd3GNlthq9iARdcp14XDWI85k0t0Mcxt2BXvZ6Nvk5nX4kdydOV0txMY1r9gl+OZySPHKpkhQ9HdQ2z4imn3giM/PgCSvLnbynRIkbppp+G9H+GX23r1O7MqLz+6L9OfKT2A2DhqOtOjTVhpnIzVON/ba7ce/kOkkokbSREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERA//2Q==" class="card-img-top" alt="admin image">
                        <div class="card-body">
                            <h5 class="card-title">ADMIN</h5> <br>

                            <a href="/admin" class="btn btn-primary">Click me</a>
                        </div>
                    </div>


                </div>

                <div class="col-sm-6">
                    <div class="card"  style="width: 18rem;">
                        <img src="https://miro.medium.com/max/1400/1*1YZRmdvIa22har7Ca7KRbQ.jpeg" class="card-img-top" alt="admin image">
                        <div class="card-body">
                            <h5 class="card-title">USER</h5><br>

                            <a href="/home" class="btn btn-primary">Click me</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
