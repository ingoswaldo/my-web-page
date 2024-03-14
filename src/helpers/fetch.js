export const fetchSetting = (fileName) => {
    if (!fileName) return

    return fetch(`/settings/${fileName}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch data');
            }
            return response.json();
        })
        .catch(error => {
            console.error(error);
            return [];
        });
}
