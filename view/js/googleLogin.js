function handleCredentialResponse(response) {
    const encodedJwtIdToken = response.credential;
    console.log("Encoded JWT ID token: " + encodedJwtIdToken);

    fetch('https://oauth2.googleapis.com/tokeninfo?id_token=' + encodedJwtIdToken)
        .then(response => response.json())
        .then(data => {
            const userInfo = {
                name: data.name,
                email: data.email,
                picture: data.picture
            };
            console.log(userInfo);

            // Lưu thông tin người dùng vào local storage
            localStorage.setItem('userArray', JSON.stringify(userInfo));

            // Cập nhật giao diện với thông tin người dùng
            document.getElementById('loginBtn').style.display = 'none';
            document.getElementById('user-info').style.display = 'flex';
            document.getElementById('user-avatar').src = userInfo.picture;
            document.getElementById('user-name').textContent = userInfo.name;

            // Điều hướng tới URL sau khi đăng nhập thành công
            window.location.href = ""; 
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function loginByGoogle() {
    google.accounts.id.initialize({
        client_id: "670250432008-9hvkngumlsbpqve7n0u1gf6m7j1p3dnr.apps.googleusercontent.com",
        callback: handleCredentialResponse
    });
    google.accounts.id.prompt(); // Hiển thị cửa sổ đăng nhập nếu người dùng chưa đăng nhập

    // Kiểm tra nếu người dùng đã đăng nhập trước đó
    const savedUserInfo = localStorage.getItem('userArray');
    if (savedUserInfo) {
        const userInfo = JSON.parse(savedUserInfo);
        document.getElementById('loginBtn').style.display = 'none';
        document.getElementById('user-info').style.display = 'flex';
        document.getElementById('user-avatar').src = userInfo.picture;
        document.getElementById('user-name').textContent = userInfo.name;
    }
}


export { loginByGoogle, handleCredentialResponse};
