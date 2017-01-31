function go_back(defaultLocation) {
    console.log("back!");
    if (! (document.referrer === "" || typeof(document.referrer) !== "string") ) {
        history.go(-1);
        return false;
    } else {
        window.location.href = defaultLocation;
    }
}