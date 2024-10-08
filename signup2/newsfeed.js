const newsData = [
    {
        title: "Sabbir",
        content: "This is the summary of the first news article. It contains some brief information about the news."
    },
    {
        title: "News Headline 2",
        content: "This is the summary of the second news article. More details and updates can be found here."
    },
    {
        title: "News Headline 3",
        content: "This is the summary of the third news article. Keep checking back for more updates."
    }
];

// Loop through the newsData array
newsData.forEach(newsItem => {
    const title = newsItem.title;
    const content = newsItem.content;

    // You can now use `title` and `content` variables as needed
    console.log("Title:", title);
    console.log("Content:", content);

    // Example: Append to a DOM element
    const newsElement = document.createElement('li');
    newsElement.innerHTML = `
        <h2>${title}</h2>
        <p>${content}</p>
    `;
    document.getElementById('newsfeed').appendChild(newsElement);
});
