export default {
  methods: {
    range(start, stop, step = 1) {
      var a = [start],
        b = start;
      step = step || 1;
      while (b < stop) {
        a.push((b += step));
      }
      return a;
    },
    capitalizeWord(tag) {
      let lower = tag.toLowerCase();
      let lowerArr = lower.split(" ");
      let finalArr = [];
      for (let i = 0; i < lowerArr.length; i++) {
        finalArr.push(
          lowerArr[i].charAt(0).toUpperCase() + lowerArr[i].slice(1)
        );
      }
      return finalArr.join("");
    },
    groupBy(list, keyGetter) {
      const map = new Map();
      list.forEach((item) => {
        const key = keyGetter(item);
        const collection = map.get(key);
        if (!collection) {
          map.set(key, [item]);
        } else {
          collection.push(item);
        }
      });
      return Array.from(map, ([name, value]) => ({
        name,
        value,
      }));
    },
    generateBreadCrumb(data) {
      let html = "";
      data.forEach((item, key) => {
        // console.log(item,key);
        if (key != 0) {
          html += '<span class = "mb-2" > > </span>';
        }
        if (item.url != false && item.url != null)
          html += `<a href="${item.url}" class="btn-link">${item.label}</a>`;
        else html += item.label;
      });
      return html;
    },
  }
};
