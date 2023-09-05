# crapmap

A crappy Image format.

## Challenge

Write a program that can decode and encode images in the crapmap format.  
There are some sample crapmap Images in data.

## Specs

Specifications for crapmap.  

File extension: `.crapmap`  
E.g.: `image.crapmap`  


File Specifications:

| description    | required | bytes          | values              | notes                                                                             |
|----------------|----------|----------------|---------------------|-----------------------------------------------------------------------------------|
| magick bytes   | yes      | 4              | 0x43 0x52 0x41 0x50 |                                                                                   |
| version        | yes      | 1              | 0x01                |                                                                                   |
| width          | yes      | 1              | 0x01 to 0xFF        |                                                                                   |
| height         | yes      | 1              | 0x01 to 0xFF        |                                                                                   |
| colors         | no       | 1              | 0x01 to 0xFF        | if set >= 0x01<br/>number represents the amount of colors                         |
| color table    | no*      | 3              | e.g. 0xFA 0x80 0x72 | * if colors >= 1                                                                  |
| color table    | no*      | 3              | e.g. 0x90 0xEE 0x90 | * if colors >= 2                                                                  |
| color table... | ...      |                |                     | and so son                                                                        |
| color pixel    | yes      | width * height | 0x00 to 0xFF        | vales between 0x00 and `colors`<br/>0x01 is color index 1<br/>0xff is transparent |

If no colors are set, 0x00 is transparent, 0x01 is an undefined color based on the implementation.

## Example

The file in `data/sample.crapmap` is a 5x5 image with 2 colors, RED and GREEN with the following pattern:  

```
R G R G R
G R G R G
R G R G R
G R G R G
R G R G R
```

As emojis:
```
🟥🟩🟥🟩🟥
🟩🟥🟩🟥🟩
🟥🟩🟥🟩🟥
🟩🟥🟩🟥🟩
🟥🟩🟥🟩🟥
```
