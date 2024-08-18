<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bán hàng</title>
    <link rel="icon" href="../../public/image/mini-logo.png" type="image/png">
</head>
<!-- css global -->
<style>
:root {
    --red: #c34439;
    --black: #202020;
    --lightblack: #4E4E4E;
    --gray: #BDBDBD;
    --lightgray: #faf9f8;
    --yellow: #FFB11B;
    --green: #56D237;
}

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--lightgray);
    color: var(--lightblack);
}

a,
a * {
    text-decoration: none;
    color: var(--lightblack);
}

button {
    cursor: pointer;
    border: none;
}

.line {
    border-bottom: 1px solid var(--gray);
    width: 100%;
    height: 1px;
    margin: 10px auto;
}

.vertical-line {
    border-right: 1px solid var(--gray);
    width: 1px;
    height: 100%;
}

.whitediv {
    background-color: white;
    border: 1px solid var(--gray);
    box-shadow: 0px 0px 5px var(--gray);
    border-radius: 10px;
}

.jumpAnimate {
    animation: jump 1s ease 0s 1 normal;
}

@keyframes jump {
    0% {
        transform: translateY(0);
    }

    20% {
        transform: translateY(0);
    }

    40% {
        transform: translateY(-30px);
    }

    50% {
        transform: translateY(0);
    }

    60% {
        transform: translateY(-15px);
    }

    80% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(0);
    }
}
</style>
<style>
main {
    position: absolute;
    inset: 0;
    margin: 0;
    background: linear-gradient(to right bottom, rgba(195, 68, 57, 0.1), rgb(255, 177, 27, 0.1));
    z-index: -2;
}

main>form {
    position: relative;
    width: 700px;
    margin: 150px auto;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 3px gray;
}

main>form>.banhrang1 {
    position: absolute;
    right: 80px;
    top: -80px;
    width: 80px;
}

main>form>.banhrang2 {
    position: absolute;
    width: 175px;
    right: -85px;
    top: -75px;
    z-index: -1;
}

main>form>.banhrang3 {
    position: absolute;
    width: 135px;
    right: -85px;
    top: 85px;
    z-index: -1;
}



main>form>div>img {
    width: 320px;
    margin: 50px auto 0px;
}

main>form>div>h1 {
    margin: 0;
    text-align: center;
}

main>form>div {
    display: flex;
    flex-direction: column;
    padding: 30px 20px 10px 20px;
    gap: 20px;
    color: #4E4E4E;
    font-size: 0.9em;
}

main>form>div>label {
    position: relative;
    margin-top: 10px;
}

main>form>div>label>svg {
    position: absolute;
    width: 15px;
    left: 7px;
    bottom: 13px;
}

main>form>div>label>input {
    padding: 5px 30px;
    width: 100%;
    margin: 5px 0;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid #a2a2a2;
    outline: none;
    background-color: transparent;
}

main>form>div>.submit {
    padding: 10px;
    width: 200px;
    border-radius: 5px;
    background-color: #c34439;
    color: white;
    border: none;
    font-size: 1.3em;
    margin: 20px auto;
}

main>form>div>a {
    color: black;
    text-decoration: none;
    text-align: end;
}
</style>

<body>
    <main>

        <form action="" method="post" enctype="multipart/form-data">

            <img class="banhrang1" src="../../public/image/Group 27.png" alt="">
            <img class="banhrang2" src="../../public/image/Group 28.png" alt="">
            <img class="banhrang3" src="../../public/image/Group 29.png" alt="">

            <div>

                <img src="../../public/image/horizontal-logo-red.png" alt="">
                <h1>Quản trị hệ thống</h1>

                <label>
                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector"
                            d="M13.5 0H1.5C0.675 0 0.00749999 0.632812 0.00749999 1.40625L0 9.84375C0 10.6172 0.675 11.25 1.5 11.25H13.5C14.325 11.25 15 10.6172 15 9.84375V1.40625C15 0.632812 14.325 0 13.5 0ZM13.2 2.98828L7.8975 6.09609C7.6575 6.23672 7.3425 6.23672 7.1025 6.09609L1.8 2.98828C1.6125 2.87578 1.5 2.68594 1.5 2.48203C1.5 2.01094 2.0475 1.72969 2.475 1.97578L7.5 4.92188L12.525 1.97578C12.9525 1.72969 13.5 2.01094 13.5 2.48203C13.5 2.68594 13.3875 2.87578 13.2 2.98828Z"
                            fill="#BDBDBD" />
                    </svg>

                    <input class="" type="text" placeholder="Email" name="email">
                </label>
                <label>

                    <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector"
                            d="M12.1875 6.5625V4.6875C12.1875 2.0625 10.125 0 7.5 0C4.875 0 2.8125 2.0625 2.8125 4.6875V6.5625C1.21875 6.5625 0 7.78125 0 9.375V15.9375C0 17.5312 1.21875 18.75 2.8125 18.75H12.1875C13.7812 18.75 15 17.5312 15 15.9375V9.375C15 7.78125 13.7812 6.5625 12.1875 6.5625ZM4.6875 4.6875C4.6875 3.09375 5.90625 1.875 7.5 1.875C9.09375 1.875 10.3125 3.09375 10.3125 4.6875V6.5625H4.6875V4.6875ZM8.53125 12.6562L8.4375 12.75V14.0625C8.4375 14.625 8.0625 15 7.5 15C6.9375 15 6.5625 14.625 6.5625 14.0625V12.75C6 12.1875 5.90625 11.3437 6.46875 10.7812C7.03125 10.2187 7.875 10.125 8.4375 10.6875C9 11.1562 9.09375 12.0937 8.53125 12.6562Z"
                            fill="#BDBDBD" />
                    </svg>

                    <input class="" type="password" placeholder="Mật khẩu" name="password">
                </label>
                <a href="/quenmatkhau">Quên mật khẩu?</a>

                <input class="submit" type="submit" value="Đăng nhập">

            </div>

        </form>

    </main>

</body>

</html>