<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>FOUNDATION BANK</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

<body>

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>


    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FOUNDATION BANK <img src="https://static.vecteezy.com/system/resources/thumbnails/000/593/729/small/B011.jpg" alt="Bank" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link" aria-current="page" href="index.php"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="#">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/ " target="_blank">About</a>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <class class="welcome">
        <h2>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEBUTEhMWFRUVFhYZFRYVFxUVFRgWFRIWFhcWGBYaHCggGBolHRgVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGy8mICYvLS0tLS8tLS8tLS8tMC0tLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAK0BJAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABAIDBQYHAQj/xABIEAACAQICBQUKCwcDBQAAAAABAgADEQQhBRIxQVEGEyJhcQcyU4GRkpOhsdEUFiRCVHJzsrPB0hUzNVJigvAXIzRDRKLh4v/EABoBAQADAQEBAAAAAAAAAAAAAAACAwQBBQb/xAA2EQACAQIDBAkCBQQDAAAAAAAAAQIDEQQhMRJBUWEFE3GBkaGx0fAiwRQVMlLhM3KC8QYjYv/aAAwDAQACEQMRAD8A7jERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBE8vPYAiIgCIiAIieXgHsTAV+UKsxp4ZDVqDb81VsbZk7fFIqvjkqc6zLUW3SpL0cv6bjNusmQ21uz7Pnpcq61PTPs+elzaYkbBYtKqB0N1PlHEEbiOEkyZammroREQBERAEREAREQBERAEREAREQBMTX5R4NGKviqCsNoNVAR2i+UwndW0jUoaKrNSYqzNTp6wyYLUqqrWO46pIv1z59CgbhOpXON2Ppr404D6Zh/S0/fHxpwH0zD+lp++fMth1SgqeryTtjl2fTvxqwH0zD+lp++PjTgPpmH9LT98+YdU8R5JUo42jZF2fTnxpwH0zD+lp++S8DpfD1yRRrU6hG0I6sR2gGfLVh1SRozGvQr061IlXpspBGWQYXU8VIyI642RtH1XIuNxtOkutUaw3byTwA2kyLpPSYpKABrVGF1W9hbezH5qDjIGFQXFWo4eow6JNhYcKaHML1jMyl1FfZurhuT/Su/cvnDxsSNG8oqdVtQq1NjfUDi2uOo8eqT9J1StJmXaBt4bifEM/FMRpdqbLzbrzjt3iL317ZMCLao68pM0Bh8QtLVxDKx3b2A4M3zv8zMi9ppwvuefD7EacpRnsvPn9nw+ZGH1iGZkJGoAQxBuxz+ce+7OubHjcYKVIuwubCyjaWOQUdZMpp6MpK2sFzGzMkA9Sk2EgaSo13r0yipzdME3Y2BZha4Auch7TM2Ew9ShGW0734eu74jTiaymlsry+aanoqYhhd3FL+lAGI7XINz2CQNLFqerrGowIzbnDYZgW1EZSTnu9cyn7PqkdKsB1KgHrJMtjQgLFudOtvIWnftPR2y2vGpKOzTdnxyfl5bu0pp7Kd5Rb+dv2I9PRy72dstoequd+BbI22z2ph9RSwr1EA2kvrqPOveSG0bXHe1wepqan1i0h0dCVqj/K3V0U3VFyVjxbIZDhnLErJJR+dt2/G75lUuUM+5LyKeTONxlU61TVNL+crqs31QLZdZE2eeKLCw3SqWRjsq17k6cHGNm78zC4/Rp1+eogCrbpDYtQcDwbgZHGlKeqCbr0ipXVJZXtcqQBe4tNgYTB6ZwIvzyDWZbc4o2uo+cP612g9olVVVFF9Xa/PQ6lGL2npvS9V9+K5kIYxaNbnKZ1kcA1VXMEeEUbivzhttNoRgRcZg7DxEwy0qbnnFVLsp6QBzVhmbXtciNDVObdsOdgGtRJ/lJzT+0+oiKXWK/WWzeVvnznqJbMZfTo/X+fXQzkREvJCIiAIiIAiIgCIiAIiIAiIgGhd1hxVwZwqEc6z0nAN7BUqhjc7sgbTR+SGi6NHnDiqaVGJATIVAFzvkwyN7TaeXJ+Wt9RPZI2E0DVqIHV0sRcXJv7J7EaGEoUYVK87X3t2V+BgqdbVlKEVpwK9bA/R6foacpc4I7MNT9FTmLxNMo5RrXU2Ntkt603wwVCaUo5p5p349xilSknZ3MtbBfR6fokldsESAMNT9DTmG1pOwiWFztPsnZ4KlFXzK5Q2VqyeuHwY24en6JPdNL0lyVarjD8HCrSd11V3i4GtZdwvffNqx2Lw+HpipiXa735umguzAb77Bn1y0lelUT4RhKrEIQGDCzox2THXwe1TvTi76JvJX7bfw2i6j1lPNP37TfMPo8arc503qAc4TcX2WUZ3VRYWt+cj1cGr1QlBApQgu/fKu8E3zduCnIXuZiuTWJxGKd6bVyoCg3VV1u+ta83XB4RaaBFFgPKTe5J4knO8+fxOCUZ7NWCurcHz183z8vWo1ZONoXUe3+fF6/a1o7R6UgQt9Y985N3Y8Sfy3ScJAxWNKEgAZWuc9+wASRhK+ut7WIyI65GNWDm4LVF3VuMU0siRPJ7LdSoFBJNgNstZErAEWmN/aS3IKsAd+V7bLkbQJkUOUrp1IT/AEslKLjqjzVsMpXEsYquEW+3cBxJk21FXehzNsvyHj9I0qK61RgvAbz2DfLFHSJObKNW9rgk2PXlmOue6Q0PRr51KYJtbWBs3ZcSEaqqRvTZypGcVlr5GPqaQxVX90i0U3PU6THrCDIeOeYTH16I+UhXTwq7VHFlsMusS6+HrUR0b1qY3WAqKBw3PbxHtlqlpNWawV2BF7qLnrFjmSN42iQnUjBJzk1fLx7PXzRXTpyk8m7/ADdo158y5S0U4uaFcCm51lRqeuq3z6JDCwzlFTReJNalUNSmebY5AMtw1gw37pF0XpBaVRgv7ksARups5OqR1NncbjNsilOnVhtQd1yfzf7a3SdVb6JJprdd9vhvQiRcdjEpIXqMFUbz7AN5mvYLlFUqYtEKGnSYEKGHSY2urE+LYOMulOKdmJ1YwaT1ZtcREkWCJ5PYAiIgCIiAIiIAiIgHMOXp+Wt9RPZJmjNPUEoorMQQAD0SeG/xSDy/Py5vqJ7Io8jMWyhrILgGxfPPjlPexGEwuJwtKOIk4pK6s0tyW9My06tSnUk4IxOkcQHquy7Cct26RbzMYnktikqU0KgmoSFKtcZC5ud2UyeH5EVhm+oeoMbePKboYjDUKUYqaskks82ll9iicZybk078lxzNdwdDWNz3vtk2o0y1LQVdnemFUGna9zYdIXFuOUqq8k8SAT0TbcGz8WUrli6Lec14mN0qtR32XYxOOapXVEpBLrRr0216nN/vkCqwyN7WvKHxD06dZKgUNVqI4CVOcCqtKmhBNhY3p3/ukzBcmsRWpiogXVbZrNYkX22tI+luTeIoUzUcLqggEq17XNhlbjadjOjtKntK99N97348eReo1Nm7T01Mt3OD8oq/Zj74nQpzruan5RV+zH3xN9rYymhszAHhv8k8bpeSjiG29yN+FTcFbmWsXgQ5vex7LjLZL1CkEXb1kneeMrp1AwBUgg7CMxFVLgjiCPKJ5SpwTc0s2aXJtWZE+H55LcduduNpXjF5ykdXO9iOuxBtIhoOGHRNwLXGw8Lm+yZKhT1VC8BKKTqVNqNTTssWSUY2cTBKrF2spuwsBqkeMk7JnKKaqAE96AL9gl20s4pCyMo2kEeqSo4dUU2s38ZydTbtfIsLpGmTa5z2EghfLK8fRLKNXapuBx3W9cw/MOzt0DcqFHRNh1ltluybAgsAJChOdaMo1FbyOzioNOLMLTwbFiApUNa98gOO/M9kzlp7Euo4eNJNLeQnUc9SgiYbSeG5tjiKYt4VR85R88W+cPWLzOTy0tcblco7SMJrU66EBw6uDsN8rWvt2zzC6XCYNatU3K3U2zLOrFcu215OxWAoEXqU07SAPXMBpPF4JMNUw9Jta4JCprVLN3wN9lrgb5CTazy/kpm3HPJZPx3ZeO/eVYCg2JK4iv0r/uqY7xBfbfe3X/g85VVCtJHXvkqqVJ3GSNAYoVMOhG1QFIGWa2A7L5eWY7lk6Gguq6sdezapBAtusPzkXJKne+q8X88ERaSoOS4Xb7r3fzsL2EXGV016ldqQOxVVQbcb7RPMTydVkYmq7NbJnOsMuI4TNrkFG+wsLX2dW+WNJ1NWi5NwdVjmCPmnZJOnG31Z9pJ0YW+rPtb9yzyGw4XC61s3dj4g2qPZNjmM5O0tXC0R/SD5xv8AnMnJU1aCXInRjs04rkhERJlgiIgCIiAIiIBy7l8pOOYAXJRPZJ+CbFrTBOKNgosgtllsLEXl/lXhrYo1CO+VQCdmQsQDNROJx26jR9IZ9NRXXUIJWyS1t5X+x49bE7NSUV62NuxD1SBUatcoLrnsvwkN9PYjwzer3TWnxWO8BR9IZ5i6+KuNSlTI1RrXcizbwOrrlkcGtHsvwyKNuTd4tr/JszK6VrK7OtRgzd8eNtl5TW5QYogg1XsduwflMHhq2ILHnaaKttqsSb8LeWZvk9hkqVjr7FF85XjZ0cJRlXqRT2bblxSSvbi12GjDU6lWapqWvN82/uRsPpvEUlCU6rKo2AWsOy4lnHaZxFVdWpVZlvexta42bBNrxeCSqlTooFS4UjbewIN9hBE0NjM/Q3SNHpHakqajKNuD1uk07J6p7jZisLLD2W1dPu8rvijcO5kflFX7MffE2HGhg7m9nBJsdjKe93jK0wPcyotztV9U6uoFvuvrXt5Jv9Sird8oPaAZ5P8AyGh19dxTta3p89N5pwVTq437SBoW9nPzSRbhe3St1XmUlKqBslUxUafVwUb6Fk5bUmxERLSIiIgHlp7EQDF6QxjKSAbaoHC5J4X3SRgKxYENtFvWL+WVYnBq5vmDxFvzlyhQCCw7STtJmWMKqquTf0lrlDYslmXpaqqGBU3zG4kHPgRLsgaUqMtFyMiBt4XIBPkvL6ktmLk9xXFbTsaW2ARcZq1WNSmL5tdrEjIMb7uPVNqw1GmosgVVI+aMiPFtvMTVHNsCRemQAACL3O02OZMpGk1oM9M3sektuO9b7r5eueZg8W51XT2c89E29L9rTs9PDhOeEp0IOcX3u2/K1927K5EoXw+IekTZKoOqTlZtUhDfYMza8j6d0eqYZHsVqXCuAQRlkDl775yjTGkBXZbJqBd17km+0m1/FItRtYEEmx25+uez+TTqt1Z5NJ7KfPO/LPTtd0eVUxypwnRhmpb1uyeXNXNlxWIxBZhQNubVGNgLvcXJzzK7haR9I4561Oo9rLzQUghrFta+V7Zjj4t8v6M0ygUKxKEAC+42y27pN0kobD1LG91OYOtewJ2zBU6PrU6jlUm83e27fa1tEr521PR/FU6tFxppaW8s7rfyvoZXRn7il9RPuiS5gNHaVHM0wFJsi3zA2KAbA5mZjD1Q4DA9EjL879cup14Tyi72O7ElFNovxES44IiIAiIgCIiAaN3Zv4S/2tD8ZZpHcuzp1759NNv1TN27s/8ACX+1ofjrNL7lX7rEH+tPumXUf1eJjxudJ93qbvU4T2kg22lEi1qtY65QqFRgmeZJNs9mW3qluIrwoQ2pX7uxv0R40IubyMiwHASHVpm4ZTqsPIQdxlqomJ6Yup1O+sFy6JbeOr1iKfOhlDlSGBta2RCq1j12YeWZVjKFf/qlF55ZrLhx4luzVpNTWTW/y/gka7kap1VXeEG2ck5cZY+tuzT7iTryLczknL3+IVu1Pw0lqw1KhDZpq2fN7ud2bMPiKtertVHeydtFvV9LfOxH0hS70dg9krlFPvR2D2SuUnqCIiAIiIAiIgCIiAIiIAmJ0vpmhRBWobkjvALsQerYB2zLTSOW2hWu2JU3Fl11zuLZaw6tl5owtOnUqqNR2Xq+BVWlKMLxMRitNsTandEv0b2ZgPrf52yBr3zJuevbIweVB59Fh8DSw8dmjBRXJer1fxaHkVq06rvUldkoPLgeRA8rDy5wZQ0iSGl5a7BSoYgNkQCQDIYeVq8qlS2lsyWRHR3M3htILZbgqVsNZScwDexE2zRKDmgQQbktkcsze3inP8JSNR1RdrGw4dp6p0PRGC5miqXuRck9ZNzbqnzmK6Nw2Gnt01Zvdu7bbtNx7OExdestmeaW/ffgToiJnNgiIgCIiAIiIBovdn/hL/a0Px1mk9y4/wC1X+un3TN27s/8Jf7Wh+Os0nuW/u6/10+6ZfQ/V4mLHf0n3epvdJd8hV8JVBco6hXNzcZ7ja9r2uB5JkVFpbqtullajCstmfq16NHkRk4K6MbzeIux11GtfWsLXupU3AXgTLtCnU1gajA6osoHWAL7BuAHikmVItzK4YGjCSkk7r/1L3OOrOStcu01ynHuXv8AEa3an4aTsc45y9/iNbtT8NJbV0NuC/XbkfSFPvR2D2SuUU+9HYPZK5jPYERIGmNIpQpGo+7JRvZjsAnG0ldnG0ld6DF6Wo0mCVHCsRcCxJt4hLR0/hvCep/dIejKHR5wkNUqdJnGe7Jb/wAoGUt6YrHUARyHJvqgNcrmLAjZnt8Uz163VU3UfhvfBarPl4ClCpUaSsr8m7eZOOnaXzdd/qo/tIAkLGcoXQqFwzXdgqlmVRckAX1b8ZLwqWUdHVyF1uTY5k9I7rn1SDQqrXxaBTrLQBZiNmu3RUeLMyd5bKu7N2+Zq+nGxXUusk89Fl/vdc2UT2IlxaJ4Z7PCJxgo187XF9w3yu0wtag+uciSSd2W0lSDu3eSZpdglNKq5uSatYslFRtZnLH5R1dY2WiBc2HNJx7Ju/J1UrYZKj06es172RQMmI2W6py2oeke0+2dS5Ff8Kl/d99p9N0pRhTopwVs16M8zDSk5tSd/iHKPUo4Z6iU6esNUC6KdrAbLTT8Pygql1BWkQWFxzSbLjqm38tj8jftT74nNsI3TT6y/eEj0bSjUoNyV82vJe5zFTlGaSe77nXvgVLwaeavumpcp9IGjW1KaUgNUHNEJuSeIm7TnnLs/Kx9mvtaYejY9ZVtLPL2L8XeMLxyzMvyQ0i1VnDKmSggqiqcza2U2yaN3Pj/ALtX6i/eM3mQx8FCu0uR3Ctukm+YiImM0CIiAIiIAiIgGi92f+Ev9rQ/HWcp5Jcp/geuDT5xXscm1SCLjgbixnXuXKri8JVwrJUUtqlXK2AdHDqbbxcC/VecYq8lcaptzN+tXSx6xcg+qWRutCmooTVnobZ/qWn0ZvSD9MtHukJvoN6Qfpmq/FfG+APnU/1Tx+SmMO3Dt51P9Us6yRneFoPd5v3Nr/1Jp+APpF/TKk7pKD/tm9IP0zUPihi/o7efT/VLg5LY3wB86n+qOtkcWEoLd5v3Nu/1LT6M3pB+maPpvSJxGIesVCl2B1RnYABQL78gJJ+LGN8AfOp/qmQ0HyOxD1k59NSkGUv0lZ2UEEqoBO21rnZeRcm9SyFKnB3ifRNPvR2D2SuQtH40VBkjrb+ZbDxHfJspNadxLVakrCzKGHAgEeQy7LNWkTsYr2WgEB9BYYn90oP9N0P/AIkSn9g0bd63ZzlS2f8AdJRwbeEb/PHKPgLeEPkPvkNhcvD/AGV9XD9q8ix8X8NvQt9Z6je0yZhMDSpAimipfbqgC9tl+MtjAt4Q+v3y4uGYf9RvV+ckopaCMIx0XoS4iJ0sEREAREQDhjnpHtPtnVeRH/Bpf3ffactrYWoGYGm46R+a3HsnU+RaFcDSDAg9LIixzdiMp9J0y11Ef7l6Mw4VNT7vYo5c/wDCqdqfiCc0wh/3E+uv3hOl8t6ZbBVAoJN0NgCTYOLmwnNsFhahqJ0H79fmt/MOqc6Ia/Dy/ufpE5il9fd9ztM5xy+b5WPs09rTo85vy+oucUCFYg01zCkjItvnm9Etdd3P7F+LV6feTO50f92r9RfvGb5ND7nNJhUqkqwGqouQQL6xyzm+SPSTX4mVuXodw39NCIiYC8REQBERAEREA8tKGoqdqg9oEuRAI/wKl4NPNHulJ0fR8GnmiSogWRE/Z1HwaeaJ7+z6Xg080SVEHLIsLhaY2IvmiXFQDYLdkriDoiIgCIiAIiIAiIgCIiAIiIAmi8ueU1Sk5w9Lo3QFqmesNbcvDLf1zeCLiYHHclMPVbXfWLHeTrGw2bZpwlSlTqbdWN0t3MhUUmrROW/D63hannt7558Oq+Ffz2986T8R6G71qPfKDyHo8R5v/wBT2/zmh+1+XuZeomc6GOq+Efz298qGPq+Ffz2986F8R6XFfNPvnnxHp8V80++c/OKH7X5e5zqJnPxjqnhH89vfPRj6nhH89vfOgfEelxXzT+qVDkRR4jzf/c5+b0P2vy9zn4efxmjaP01Xo1A61GNtzMxUjgRedS0BpL4Rh0q21S1wRuurFTbqymKXkTh99/IBMro3Q9OgAEL2F+jrHVz/AKRlPOx2LoYhJxi1Ljlp3Mvo05webyMnERPONAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAf/9k=" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Money
                Transfer</strong> <img src="https://e7.pngegg.com/pngimages/495/786/png-clipart-electronic-funds-transfer-bank-money-transfer-wire-transfer-bank-payment-mobile-payment-thumbnail.png" alt="Bank" width="75" height="75">
        </h2>
    </class>

    <!-- options -->
    <div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
        <a href="history.php"><button type="button" class="btn btn-primary btn-lg mb-3">See all Transaction History</button></a>
    </div>
    </div>


    <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-sm">
                        <thead style="color : black;" class="table-danger">
                            <tr>
                                <th scope="col" class="text-center py-2">S.No.</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="text-center py-2">
                                        <?php echo $rows['id'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['name'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['email'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['balance'] ?>
                                    </td>
                                    <td><a href="users.php?id= <?php echo $rows['id']; ?>"> <button class="btn btn-outline-dark btn">View and Transact</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- footer -->

    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright - Made with 🧡 by Sriharsha yelugu :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" alt="" width="40" height="35"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>